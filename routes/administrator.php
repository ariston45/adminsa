<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
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
	Route::group(['middleware' => ['rulesystem:ADM']], function () {
		Route::get('home', [HomeController::class,'homeFunction']);
		Route::prefix('setting')->group(function(){
			Route::get('user', [SettingController::class,'UserDataView']);
			Route::get('user/detail-user/{id}', [SettingController::class,'viewUserDataDetail']);
		});
		Route::prefix('crud')->group(function(){
			Route::post('store-update-user', [ActionController::class,'storeUdateUser'])->name('store-update-user');
		});
	});
});