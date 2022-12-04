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

        $package->title = $request->title;
        $package->description = $request->description;
        $package->monthly = $request->monthly;
        $package->months_3 = $request->month3;
        $package->months_6 = $request->month6;
        $package->annual = $request->annual;
        $package->day_entry = $request->day;
        $package->note = $request->note;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('package',$imagename);
        $package->image = $imagename;

        $package->save();
        return redirect()->back()->with('message','Package Added Successfully');
    }

    public function show_package(){
        $package = Package::all();
        return view('admin.show_package',compact('package'));
    }

    public function delete_package($id){
        $package=package::find($id);
        $package->delete();

        return redirect()->back()->with('message','Package Deleted Successfully');
    }
}