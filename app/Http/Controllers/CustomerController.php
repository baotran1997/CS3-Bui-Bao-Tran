<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {

        $customers = Customer::all();
        return view('admin.customers.list', compact('customers'));
    }

    public function create() {
        return view('admin.customers.create');
    }

    public function store(Request $request) {

        $customer = new Customer();

        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->city = $request->input('city');

        $customer->save();

        return redirect()->route('customers.index');
    }

    public function edit($id) {

        $customer = Customer::findOrFail($id);

        return view('admin.customers.edit', compact('customer'));
    }

    public function update(Request $request, $id){

        $customer = Customer::findOrFail($id);

        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->city = $request->input('city');

        $customer->save();

        return redirect()->route('customers.index');
    }

    public function delete($id) {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
