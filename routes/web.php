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

route::get('/package_details/{id}', [HomeController::class,'package_details']);

route::post('/add_client', [AdminController::class,'add_client']);

route::get('/view_members', [AdminController::class,'view_members']);

route::get('/delete_member/{id}', [AdminController::class,'delete_member']);

route::get('/staff_registration', [AdminController::class,'staff_registration']);

route::post('/add_staff', [AdminController::class,'add_staff']);

route::get('/view_staff', [AdminController::class,'view_staff']);

route::get('/delete_staff/{id}', [AdminController::class,'delete_staff']);

route::get('/view_package', [AdminController::class,'view_package']);

route::post('/add_package', [AdminController::class,'add_package']);

route::get('/show_package', [AdminController::class,'show_package']);

route::get('/delete_package/{id}', [AdminController::class,'delete_package']);

route::get('/update_package/{id}', [AdminController::class,'update_package']);

route::post('/update_package_confirm/{id}', [AdminController::class,'update_package_confirm']);

route::post('/add_cart/{id}', [HomeController::class,'add_cart']);

route::get('/show_cart', [HomeController::class,'show_cart']);

route::get('/remove_cart/{id}', [HomeController::class,'remove_cart']);

route::get('/stripe/{totalprice}', [HomeController::class,'stripe']);

Route::post('stripe/{totalprice}', [HomeController::class, 'stripePost'])->name('stripe.post');

route::get('/payment', [AdminController::class,'payment']);

route::get('/confirmed/{id}', [AdminController::class,'confirmed']);

route::get('/print_pdf/{id}', [AdminController::class,'print_pdf']);

route::get('/search', [AdminController::class,'searchdata']);