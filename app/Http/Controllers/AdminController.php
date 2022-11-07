<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function new_registration(){

        return view('admin.new_registration');
    }
}
