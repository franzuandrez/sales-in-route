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
    return view('dashboard');
});

Route::get('/registers/companies','CompanyController@index')->name('register.company.index');
Route::get('registers/companies/create','CompanyController@create')->name('register.company.create');

/*CLIENTES*/
Route::get('registers/clientes/create','ClientesController@crear_cliente')->name('register.cliente.create');
Route::post('registers/clientes/store', 'ClienteController@store')->name('register.create.cliente');

Route::delete('register/clientes/{id}','ClientesController@destroy')->name('register.destroy.cliente');



Route::post('registers/clientes/mostrar','ClientesController@mostrar')->name('register.cliente.mostrar');

