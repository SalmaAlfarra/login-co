<?php

namespace App\Http\Controllers;

use App\Imports\CustomerPaymenteMechanismsImport;
use App\Models\CustomerPaymenteMechanisms;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CustomerPaymentMechanismsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerPaymentMechanisms  $customerPaymentMechanisms
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerPaymenteMechanisms $customerPaymentMechanisms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerPaymentMechanisms  $customerPaymentMechanisms
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerPaymenteMechanisms $customerPaymentMechanisms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerPaymentMechanisms  $customerPaymentMechanisms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerPaymenteMechanisms $customerPaymentMechanisms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerPaymentMechanisms  $customerPaymentMechanisms
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerPaymenteMechanisms $customerPaymentMechanisms)
    {
        //
    }

    public function paymenteexcelfile(Request $request)
    {
        return view('customer.paymentefile');
    }

    public function paymenteuploadexcel(Request $request)
    {
        Excel::import(new CustomerPaymenteMechanismsImport, $request->file('excelfile'));
        return view('customer.view-list');
    }

}