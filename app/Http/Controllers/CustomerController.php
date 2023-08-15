<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    }
    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]
            );
        echo '<pre>';
        print_r($request->all());
        //insert query
        $customers = new Customer;
        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->password = md5($request['password']);
        $customers->dob = $request['dob'];
        $customers->address = $request['address'];
        $customers->state = $request['state'];
        $customers->country = $request['country'];
        $customers->gender = $request['gender'];
        $customers->save();

        return redirect('/customer');
    }
    public function view(){
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
}