<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
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
Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');
Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses_login');

Route::group(['middleware' => ['auth']], function () {
	# Admin
	Route::group(['middleware' => ['cek_login:admin']], function () {
		Route::get('home', [AdminController::class,'HomeFunction']);
	});
	# User
	Route::group(['middleware' => ['cek_login:editor']], function () {
		Route::get('editor', [EditorController::class,'LandPage']);
	});
});