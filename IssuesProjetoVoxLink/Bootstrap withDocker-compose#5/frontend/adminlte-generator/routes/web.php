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

Route::get('/home', 'HomeController@index');

Route::resource('customerCPFs', 'CustomerCPFController');

Route::resource('customerCNPJs', 'CustomerCNPJController');

Route::resource('invoices', 'InvoiceController');

Route::resource('callmetadatas', 'CallmetadataController');

Route::resource('invoiceedpoints', 'InvoiceedpointController');

Route::resource('users', 'UserController');


Route::resource('customers', 'CustomerController');
