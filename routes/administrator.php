<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\HomeController;
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

Route::group(['middleware' => ['auth']], function () {
	# Admin
	Route::group(['middleware' => ['cek_login:ADM']], function () {
		Route::get('home', [HomeController::class,'homeFunction']);
	});
	# User
	Route::group(['middleware' => ['cek_login:editor']], function () {
		Route::get('editor', [EditorController::class,'LandPage']);
	});
});