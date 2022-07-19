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
Route::get('/',function (){
    return view('welcome');
});
Route::get('/test', '\App\Http\Controllers\Test2Controller@index');

Route::get('/sv','\App\Http\Controllers\Test2Controller@index');
Route::get('/login',['as' => 'login','uses' =>'\App\Http\Controllers\Auth\LoginController@getLogin']);
Route::post('/login',['as' => 'login','uses' =>'\App\Http\Controllers\Auth\LoginController@postLogin']);
Route::middleware(['auth'])->group(function (){
    Route::get('/update','\App\Http\Controllers\TestController@update');
});

















