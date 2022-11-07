<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NewClient;

class AdminController extends Controller
{
    public function new_registration(){

        return view('admin.new_registration');
    }
    
    public function add_client(Request $request ){

        $data = new NewClient;
        $data->Name = $request->name;
        $data->Gender = $request->gender;
        $data->Date_of_Birth = $request->birthday;
        $data->Email = $request->email;
        $data->Address = $request->address;
        $data->Phone = $request->phone;
        $data->Join_Date = $request->joindate;
        $data->Plan = $request->customselect;
        $data->save();

        return redirect()->back()->with('message','New Client Added Successfully');
    }

}