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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');
Route::get('/usuarios/edit/{usu_id}','UsuariosController@edit')->name('usuarios.edit');
Route::post('/usuarios/update/{usu_id}','UsuariosController@update')->name('usuarios.update');
Route::post('/usuarios/destroy/{usu_id}','UsuariosController@destroy')->name('usuarios.destroy');

Route::get('/clientes','ClientesController@index')->name('clientes');
Route::get('/clientes/create','ClientesController@create')->name('clientes.create');
Route::post('/clientes/store','ClientesController@store')->name('clientes.store');
Route::get('/clientes/edit/{cli_id}','ClientesController@edit')->name('clientes.edit');
Route::post('/clientes/update/{cli_id}','ClientesController@update')->name('clientes.update');
Route::post('/clientes/destroy/{cli_id}','ClientesController@destroy')->name('clientes.destroy');

Route::get('/proveedores','ProveedoresController@index')->name('proveedores');
Route::get('/proveedores/create','ProveedoresController@create')->name('proveedores.create');
Route::post('/proveedores/store','ProveedoresController@store')->name('proveedores.store');
Route::get('/proveedores/edit/{prov_id}','ProveedoresController@edit')->name('proveedores.edit');
Route::post('/proveedores/update/{prov_id}','ProveedoresController@update')->name('proveedores.update');
Route::post('/proveedores/destroy/{prov_id}','ProveedoresController@destroy')->name('proveedores.destroy');

Route::get('/productos','ProductosController@index')->name('productos');
Route::get('/productos/create','ProductosController@create')->name('productos.create');
Route::post('/productos/store','ProductosController@store')->name('productos.store');
Route::get('/productos/edit/{pro_id}','ProductosController@edit')->name('productos.edit');
Route::post('/productos/update/{pro_id}','ProductosController@update')->name('productos.update');
Route::post('/productos/destroy/{pro_id}','ProductosController@destroy')->name('productos.destroy');

Route::post('/facturas_detalles','FacturasController@detalles')->name('facturas.detalles');

Route::resource('facturas','FacturasController');

Route::get('/facturas_pdf/{fac_id}','FacturasController@facturas_pdf')->name('facturas.pdf');;


