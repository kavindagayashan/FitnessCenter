<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class,'redirect']);

route::get('/new_registration', [AdminController::class,'new_registration']);

route::get('/product_details', [HomeController::class,'product_details']);

route::post('/add_client', [AdminController::class,'add_client']);

route::get('/view_members', [AdminController::class,'view_members']);

route::get('/delete_member/{id}', [AdminController::class,'delete_member']);

route::get('/staff_registration', [AdminController::class,'staff_registration']);

route::post('/add_staff', [AdminController::class,'add_staff']);