<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/demo/{name?}', function ($name = null) {
    $name = compact('name');
    return view('demo')->with($name);
});

// Route::get('/',function(){
//     return view('home');
// });

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/course',function(){
//     return view('courses');
// });

//Route::get('/', [DemoController::class, 'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');
//Route::get('/courses', SingleActionController::class);
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

// Route::get('/customer',function(){
//     $customers = Customer::all();
//     echo '<pre>';
//     print_r($customers->toArray());
// });

// Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer',[CustomerController::class,'view']);
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::get('/',function(){
    return view('index');
});
Route::get('/customer/create',[CustomerController::class,'index']);