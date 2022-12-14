<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Package;

use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
        $package = package::all();
        return view('home.userpage',compact('package'));
    }
    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype == '1'){

            return view('admin.home');
        }

        else{
            $package = package::all();
            return view('home.userpage',compact('package'));
        }
    }

    public function package_details($id){
        $package = package::find($id);
        return view('home.package_details',compact('package'));
    }

    public function add_cart($id){
        if(Auth::id()){

            $user=Auth::user();

           $package=package::find($id);

           $cart = new cart;

           $cart->name=$user->name;
           $cart->email=$user->email;
           $cart->user_id=$user->id;
           $cart->title=$package->title;
           $cart->package_id=$package->id;


           $cart->save();
           return redirect()->back();
        }

        else{

            return redirect('login');
        }
    }
}
