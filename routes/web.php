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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/product/create', 'ProductController@index');

Route::post('/product/insert', 'ProductController@create');

Route::get('/product/delete/{id}','ProductController@destroy');

Route::get('/product/edit/{id}','ProductController@edit');
Route::put('/product/edit/{id}','ProductController@update');


Route::get('/product/edit/','ProductController@edit');


/**************************************************
            Usuarios
***************************************************/
Route::get('/users', 'UserController@index');

Route::get('/user/create', 'UserController@createUser');

Route::post('/user/insert', 'UserController@create');

Route::get('/user/delete/{id}','UserController@destroy');

Route::get('/user/edit/{id}','UserController@edit');

Route::put('/user/edit/{id}','UserController@update');

Route::get('/user/edit/','UserController@edit');

/**************************************************
            Clientes
***************************************************/
Route::get('/clientes', 'ClienteController@index');

Route::get('/cliente/create', 'ClienteController@createCliente');

Route::post('/cliente/insert', 'ClienteController@create');

Route::get('/cliente/delete/{id}','ClienteController@destroy');

Route::get('/cliente/edit/{id}','ClienteController@edit');
Route::put('/cliente/edit/{id}','ClienteController@update');

Route::get('/cliente/edit/','ClienteController@edit');

/**************************************************
            Stock
***************************************************/
Route::get('/stock', 'StockController@index');

Route::get('/stock/create', 'StockController@createStockItem');

Route::post('/stock/insert', 'StockController@create');

Route::get('/stock/delete/{id}','StockController@destroy');

Route::put('/stock/edit/{id}','StockController@update');
Route::get('/stock/edit/{id}','StockController@edit');

Route::get('/stock/editQuantity/{id}','StockController@editQuantity');
Route::put('/stock/updateQuantity/{id}','StockController@updateQuantity');