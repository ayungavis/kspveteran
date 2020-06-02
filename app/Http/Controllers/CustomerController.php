<?php

namespace App\Http\Controllers;

use App\Application;
use App\Customer;
use App\Http\Requests\ApplicationRequest;
use App\Http\Requests\CustomerRequest;
use App\Installment;
use App\Saving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->customerRequest = new CustomerRequest();
        $this->applicationRequest = new ApplicationRequest();
        $this->whatsapp = new WhatsAppController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.customer-list.index', ['customers' => Customer::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customer-create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = $request->except(['loan_application', 'loan_period', 'loan_requirement', 'loan_amount', 'loan_item', 'application_status_id']);
        $application = $request->only(['loan_application', 'loan_period', 'loan_requirement', 'loan_amount', 'loan_item', 'application_status_id']);
        
        $customerValidator = Validator::make($customer, $this->customerRequest->createRules());
        
        if ($customerValidator->fails())
            return redirect('customers/create')->withErrors($customerValidator)->withInput();

        DB::beginTransaction();

        try {
            $application['customer_id'] = Customer::create($customer)->id;
            
            $applicationValidator = Validator::make($application, $this->applicationRequest->createRules());

            if ($applicationValidator->fails())
                return redirect('customers/create')->withErrors($applicationValidator)->withInput();

            Application::create($application);

            DB::commit();
            return redirect('customers/create')->with('message', 'Registrasi nasabah berhasil!');
        } catch (\Exception $e) {
            DB::rollback();
            return view('errors.504');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::with('application', 'application.status')->find($id);
        $application = Application::with('status')->where('customer_id', $id)->first();
        return view('pages.customer-detail.index', ['customer' => $customer, 'application' => $application]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        DB::beginTransaction();

        try {
            $customer = Customer::findOrFail($id);
            $customer->update($request->validated());

            DB::commit();
            return back()->with('message', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            DB::rollback();
            return view('errors.504');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $customer = Customer::findOrFail($id);
            $customer->delete();

            DB::commit();
            return back()->with('message', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            DB::rollback();
            return view('errors.504');
        }
    }

    public function application($id)
    {
        $customer = Customer::find($id);
        $application = Application::with('status')->where('customer_id', $id)->first();
        return view('pages.application-detail.index', ['application' => $application, 'customer' => $customer]);
    }

    public function saving($id)
    {
        $customer = Customer::find($id);
        $application = Application::with('status')->where('customer_id', $id)->first();
        $saving = Saving::where('customer_id', $id)->first();
        return view('pages.savings-detail.index', ['saving' => $saving, 'customer' => $customer, 'application' => $application]);
    }

    public function installment($id)
    {
        $customer = Customer::find($id);
        $application = Application::with('status')->where('customer_id', $id)->first();
        $installment = Installment::where('customer_id', $id)->first();
        return view('pages.installment-detail.index', ['installment' => $installment, 'customer' => $customer, 'application' => $application]);
    }
}