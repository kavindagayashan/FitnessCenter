<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Package;

use App\Models\Cart;

use App\Models\Payment;

use Session;
use Stripe;

class HomeController extends Controller
{
    public function index(){
        $package = package::paginate(9);
        return view('home.userpage',compact('package'));
    }
    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype == '1'){

            return view('admin.home');
        }

        else{
            $package = package::paginate(9);
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
           $cart->image=$package->image;
           if($package->discount_price!=null){

            $cart->price=$package->discount_price;

           }
           else{
            $cart->price=$package->price;
           }
           


           $cart->save();
           return redirect()->back();
        }

        else{

            return redirect('login');
        }
    }

    public function show_cart(){
            if(Auth::id()){
                $id=Auth::user()->id;

                $cart=cart::where('user_id','=',$id)->get();
                return view('home.showcart',compact('cart'));

            }

            else{
                return redirect ('login');
            }
        
    }

    public function remove_cart($id){

        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back();

    }


    public function stripe($totalprice){

        return view('home.stripe', compact('totalprice') );
    }

    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment" 
        ]);

        $user=Auth::user();

        $userid = $user->id;

        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {

            $payment = new payment;

            $payment->name=$data->name;
            $payment->email=$data->email;
            $payment->user_id=$data->user_id;
            $payment->title=$data->title;
            $payment->package_id=$data->package_id;
            $payment->price=$data->price;
            $payment->image=$data->image;
            $payment->payment_status="Paid";

            $payment->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();

        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }

}
