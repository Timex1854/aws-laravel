<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('user.home');

});
Route::get('/index', function () {
    return view('index');

});

Route::get('/contact', function () {
    return view('user.contact');

});
Route::get('/about', function () {
    return view('user.about');

});



Route::get('/home', function () {
    return view('user.home');

});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/index', [ProductController::class, 'create'])->name('admin.index');



});
