<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Category starts here*/
Route::get('/category/add','App\Http\Controllers\categoryController@index')->name('show_cate_table');
Route::post('/category/save','App\Http\Controllers\categoryController@save')->name('cate_save');
Route::get('/category/manage','App\Http\Controllers\categoryController@manage')->name('manage_cate');
Route::get('/category/active/{category_id}','App\Http\Controllers\categoryController@active')->name('category_active');
Route::get('/category/inactive/{category_id}','App\Http\Controllers\categoryController@inactive')->name('inactive_cate');
Route::get('/category/delete/{category_id}','App\Http\Controllers\categoryController@delete')->name('cate_delete');
Route::post('/category/update','App\Http\Controllers\categoryController@update')->name('cate_update');

/*Category ends here*/
/*Delivery Boy Starts here*/
Route::get('/delivery/boy/add','App\Http\Controllers\deliveryBoyController@index')->name('show_deliveryBoy_add_table');
Route::post('/delivery/boy/save','App\Http\Controllers\deliveryBoyController@save_boy')->name('delivery_save');
Route::get('/delivery/boy/manage','App\Http\Controllers\deliveryBoyController@boy_manage')->name('delivery_boy_manage');
Route::get('/delivery/boy/delete/{delivery_boy_id}','App\Http\Controllers\deliveryBoyController@boy_delete')->name('delivery_boy_delete');
Route::get('/delivery/boy/inactive/{delivery_boy_id}','App\Http\Controllers\deliveryBoyController@boy_inactive')->name('delivery_boy_inactive');
Route::get('/delivery/boy/active/{delivery_boy_id}','App\Http\Controllers\deliveryBoyController@boy_active')->name('delivery_boy_active');
Route::post('/delivery/boy/update','App\Http\Controllers\deliveryBoyController@boy_update')->name('delivery_boy_update');
/*Delivery Boy Ends here*/

