<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function customer(Request $request)
    {
        $customer = Customer::where('id_card', 'LIKE', '%'. $request->q .'%')->get();
        return response()->json($customer);
    }
}
