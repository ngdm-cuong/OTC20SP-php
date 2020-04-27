<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $customers = DB::select('select * from customers' );
         $customers = Customer::all();
         //return $customers;
         return view ('pages.customers')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addCustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer ->firstName = $request->input('firstName');
        $customer ->lastName = $request->input('lastName');
        $customer ->address = $request->input('address');
        $customer ->city = $request->input('city');
        $customer ->state = $request->input('state');
        $customer ->zip = $request->input('zip');

        $customer->save();
        // return 'STORE';
        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view ('pages.customer')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        //return $id;
        return view('pages.editCustomer')->with('cust', $customer);
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

        $customer = Customer::find($id);
        $customer ->firstName = $request->input('firstName');
        $customer ->lastName = $request->input('lastName');
        $customer ->address = $request->input('address');
        $customer ->city = $request->input('city');
        $customer ->state = $request->input('state');
        $customer ->zip = $request->input('zip');

        $customer->save();
       // return $request;
       //return view('/pages.customers');
       return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customers');
    }
}
