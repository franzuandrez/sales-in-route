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




Route::get('registers/companies','CompanyController@index')->name('register.company.index');
Route::get('registers/companies/create','CompanyController@create')->name('register.company.create');

Route::get('registers/productos','ProductController@index')->name('register.product.index');
Route::get('registers/Productos/create','ProductController@create')->name('register.Product.create');

Route::get('registers/Proveedores/index','ProvedController@index')->name('register.Proved.index');

Route::get('registers/Clientes/index','ClientController@index')->name('register.Client.index');

Route::get('registers/Usuarios/index','UsersController@index')->name('register.Users.index');

Route::get('registers/Libros/index','LibrosController@index')->name('register.Libros.index');
Route::get('registers/Libros/create','LibrosController@create')->name('register.Libros.create');

Route::get('registers/Prestamos/index','PrestamosController@index')->name('register.Prestamos.index');
Route::get('registers/Prestamos/create','PrestamosController@create')->name('register.Prestamos.create');


