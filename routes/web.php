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
/*EMPRESA*/
Route::get('/companies/home','CompanyController@index')->name('Company.Index');
Route::get('registers/companies/create','CompanyController@create')->name('Register.Company.Create');
Route::post('registers/companies/store','CompanyController@store')->name('Register.Company.Store');
Route::get('registers/companies/edit/{id}','CompanyController@edit')->name('Register.Company.Edit');
Route::patch('registers/companies/update/{id}','CompanyController@update')->name('Register.Company.Update');


/*PRODUCTO*/

Route::get('/productos/home','ProductoController@index')->name('Producto.Index');
Route::get('registers/productos/create','ProductoController@create')->name('Register.Producto.Create');
Route::post('registers/productos/store','ProductoController@store')->name('Register.Producto.Store');
Route::get('registers/productos/edit/{id}','ProductoController@edit')->name('Register.Producto.Edit');
Route::patch('registers/productos/update/{id}','ProductoController@update')->name('Register.Producto.Update');



/*PROVEEDORES*/
Route::get('/proveedores/home','ProveedorController@index')->name('Proveedor.Index');
Route::get('registers/proveedores/create','ProveedorController@create')->name('Register.Proveedor.Create');
Route::post('registers/proveedores/store','ProveedorController@store')->name('Register.Proveedor.Store');
Route::get('registers/proveedores/edit/{id}','ProveedorController@edit')->name('Register.Proveedor.Edit');
Route::patch('registers/proveedores/update/{id}','ProveedorController@update')->name('Register.Proveedor.Update');


/*CLIENTES*/
Route::get('/clientes/home','ClienteController@index')->name('Cliente.Index');
Route::get('registers/clientes/create','ClienteController@create')->name('Register.Cliente.Create');
Route::post('registers/clientes/store','ClienteController@store')->name('Register.Cliente.Store');
Route::get('registers/clientes/edit/{id}','ClienteController@edit')->name('Register.Cliente.Edit');
Route::patch('registers/clientes/update/{id}','ClienteController@update')->name('Register.Cliente.Update');
Route::patch('registers/clientes/update/{id}','ClienteController@update')->name('Register.Cliente.Update');
Route::patch('registers/clientes/update/{id}','ClienteController@update')->name('Register.Cliente.Update');






Route::get('/productos/home','ProductoController@index')->name('Producto.Index');



//Route::get('/usuarios/home','UserController@index')->name('Usuario.Index');


