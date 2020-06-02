<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\InstallmentRequest;
use App\Installment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InstallmentController extends Controller
{
    public function __construct()
    {
        $this->installmentRequest = new InstallmentRequest();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.installment-list.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $customers = Customer::get();
        return view('pages.installment-create.index', ['customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstallmentRequest $request)
    {
        $installment = $request->except(['name', 'address']);

        $installmentValidator = Validator::make($installment, $this->installmentRequest->createRules());
        
        if ($installmentValidator->fails())
            return redirect('customers/create')->withErrors($installmentValidator)->withInput();

        DB::beginTransaction();

        try {
            Installment::create($installment);

            DB::commit();
            return back()->with('message', 'Angsuran berhasil disimpan!');
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
