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
/*Category ends here*/

