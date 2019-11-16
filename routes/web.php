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

Route::get('app',function (){
   return view('welcome');
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



//MARCAS

Route::get('/marcas/home', 'MarcaController@index')->name('Marca.Index');
Route::get('registers/marcas/create','MarcaController@create')->name('Register.Marca.Create');
Route::post('registers/marcas/store','MarcaController@store')->name('Register.Marca.Store');
Route::get('registers/marcas/edit/{id}','MarcaController@edit')->name('Register.Marca.Edit');
Route::patch('registers/marcas/update/{id}','MarcaController@update')->name('Register.Marca.Update');


//PERMISOS

Route::get('/permissions/home', 'PermissionController@index')->name('Permission.Index');
Route::get('registers/permissions/create','PermissionController@create')->name('Register.Permission.Create');
Route::post('registers/permissions/store','PermissionController@store')->name('Register.Permission.Store');
Route::get('registers/permissions/edit/{id}','PermissionController@edit')->name('Register.Permission.Edit');
Route::patch('registers/permissions/update/{id}','PermissionController@update')->name('Register.Permission.Update');


//CATEGORIA CLIENTE
Route::get('/categoria_clientes/home', 'CategoriaClientesController@index')->name('Categoria_Cliente.Index');
Route::get('registers/categoria_clientes/create','CategoriaClientesController@create')->name('Register.Categoria_Cliente.Create');
Route::post('registers/categoria_clientes/store','CategoriaClientesController@store')->name('Register.Categoria_Cliente.Store');
Route::get('registers/categoria_clientes/edit/{id}','CategoriaClientesController@edit')->name('Register.Categoria_Cliente.Edit');
Route::patch('registers/categoria_clientes/update/{id}','CategoriaClientesController@update')->name('Register.Categoria_Cliente.Update');

//PAIS

Route::get('/paises/home','PaisController@index')->name('Pais.Index');
Route::get('registers/paises/create','PaisController@create')->name('Register.Pais.Create');
Route::post('registers/paises/store','PaisController@store')->name('Register.Pais.Store');
Route::get('registers/paises/edit/{id}','PaisController@edit')->name('Register.Pais.Edit');
Route::patch('registers/paises/update/{id}','PaisController@update')->name('Register.Pais.Update');


//ROLES

Route::get('/roles/home', 'RolesController@index')->name('Rol.Index');
Route::get('registers/roles/create','RolesController@create')->name('Register.Rol.Create');
Route::post('registers/roles/store','RolesController@store')->name('Register.Rol.Store');
Route::get('registers/roles/edit/{id}','RolesController@edit')->name('Register.Rol.Edit');
Route::patch('registers/roles/update/{id}','RolesController@update')->name('Register.Rol.Update');


//UNIDADES
Route::get('/unidades/home', 'UnidadesController@index')->name('Unidad.Index');
Route::get('registers/unidades/create','UnidadesController@create')->name('Register.Unidad.Create');
Route::post('registers/unidades/store','UnidadesController@store')->name('Register.Unidad.Store');
Route::get('registers/unidades/edit/{id}','UnidadesController@edit')->name('Register.Unidad.Edit');
Route::patch('registers/unidades/update/{id}','UnidadesController@update')->name('Register.Unidad.Update');



//PRESENTACIONES

Route::get('/presentaciones/home', 'PresentacionesController@index')->name('Presentacion.Index');
Route::get('registers/presentaciones/create','PresentacionesController@create')->name('Register.Presentacion.Create');
Route::post('registers/presentaciones/store','PresentacionesController@store')->name('Register.Presentacion.Store');
Route::get('registers/presentaciones/edit/{id}','PresentacionesController@edit')->name('Register.Presentacion.Edit');
Route::patch('registers/presentaciones/update/{id}','PresentacionesController@update')->name('Register.Presentacion.Update');





Route::get('/productos/home','ProductoController@index')->name('Producto.Index');



Route::get('sistema/users','UserController@index')->name('sistema.users.index');
Route::get('sistema/users/create','UserController@create')->name('sistema.users.create');
Route::post('sistema/users/create','UserController@store')->name('sistema.users.store');
Route::get('sistema/users/{id}/edit','UserController@edit')->name('sistema.users.edit');
Route::patch('sistema/users/{id}','UserController@update')->name('sistema.users.update');
Route::get('sistema/users/{id}','UserController@show')->name('sistema.users.show');

Route::get('sistema/roles','RolController@index')->name('sistema.roles.index');
Route::get('sistema/roles/create','RolController@create')->name('sistema.roles.create');
Route::post('sistema/roles/create','RolController@store')->name('sistema.roles.store');
Route::get('sistema/roles/{id}/edit','RolController@edit')->name('sistema.roles.edit');
Route::patch('sistema/roles/{id}','RolController@update')->name('sistema.roles.update');
Route::get('sistema/roles/{id}','RolController@show')->name('sistema.roles.show');








