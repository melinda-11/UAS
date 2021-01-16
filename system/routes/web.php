<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('template', function(){
	return view('template.base');
});

Route::get('beranda', function(){
	return view('beranda');
});

Route::get('produk', function(){
	return view('produk');
});

Route::get('login', function(){
	return view('login');
});

Route::get('beranda', [HomeController:: class, 'showBeranda']);



Route::get('login', [AuthController:: class, 'showLogin'])->name('login');
Route::post('login', [AuthController:: class, 'loginProcess']);
Route::get('logout', [AuthController:: class, 'logout']);
Route::get('register', [AuthController:: class, 'showRegistration']);
Route::post('register', [AuthController:: class, 'registerProcess']);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk/filter', [ProdukController:: class, 'filter']);
	Route::post('user/produk', [UserController:: class, 'filter']);
	Route::resource('produk', ProdukController:: class);
	Route::resource('user', UserController:: class);
});