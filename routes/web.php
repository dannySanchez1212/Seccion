<?php

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

Route::get('/tipo/{type}','SweetController@notification');

Route::post('/vali',function(){
$a='casp';
dd($a);


 })->name('/vali');



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController')->middleware('admin');

Route::get('/UserConsulta/{Fecha}/{Nom}/{DiasFinal}','DayController@UserConsulta')->name('UserConsulta.index')->middleware('admin');
