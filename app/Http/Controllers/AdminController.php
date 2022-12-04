<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NewClient;

use App\Models\NewStaff;

use App\Models\Package;

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

    public function view_members(){

        $data = NewClient::all();
        return view('admin.members', compact('data'));
    }
    public function delete_member($id){
        $data= NewClient::find($id);

        $data->delete();
        return redirect()->back()->with('message','Client Deleted Successfully');
    }

    public function staff_registration(){
        return view('admin.staff_registration');
    }

    public function add_staff(Request $request){
        $data = new NewStaff;
        $data->Name = $request->name;
        $data->Gender = $request->gender;
        $data->Date_of_Birth = $request->birthday;
        $data->Qualification = json_encode($request->qualification);
        $data->Achievements = json_encode($request->achievements);
        $data->Email = $request->email;
        $data->Address = $request->address;
        $data->Phone = $request->phone;
        $data->Join_Date = $request->joindate;
        $data->Position = $request->position;
        $data->save();

        return redirect()->back()->with('message','New Staff Added Successfully');
    }

    public function view_staff(){

        $data = NewStaff::all();
        return view('admin.staff', compact('data'));
    }
    public function delete_staff($id){
        $data= NewStaff::find($id);

        $data->delete();
        return redirect()->back()->with('message','Staff Deleted Successfully');
    }

    public function view_package(){
        return view('admin.package');
    }

    public function add_package(Request $request ){
        $package = new package;

        $product->title = $request->title;
        $product->description = $request->title;
        $product->monthly = $request->title;
        $product->3months = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
    }
}