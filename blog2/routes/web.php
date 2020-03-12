<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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




// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index')->name('customers.index');

    Route::get('create', 'CustomerController@create')->name('customers.create');

    Route::post('store', 'CustomerController@store');

    Route::get('{id}/show', 'CustomerController@show')->name('customers.show');

    Route::get('{id}/edit', 'CustomerController@edit')->name('customers.edit');

    Route::put('{id}/update', 'CustomerController@update');

    Route::delete('{id}', 'CustomerController@destroy')->name('customers.destroy');
});



Route::get('/bad', function () {
    return view('home');
  });
  
  //tao group route tasks
  Route::group(['prefix' => 'tasks'], function () {
    Route::get('/','TaskController@index')->name('tasks.index');
    Route::get('/create','TaskController@create')->name('tasks.create');
    Route::post('/create','TaskController@store')->name('tasks.store');
    Route::get('/{id}/edit','TaskController@edit')->name('tasks.edit');
    Route::post('/{id}/edit','TaskController@update')->name('tasks.update');
    Route::get('/{id}/destroy','TaskController@destroy')->name('tasks.destroy');
  });