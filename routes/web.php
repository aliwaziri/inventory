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

Route::get('/','InventoryController@customer');
Route::post('/insertcustomer','InventoryController@insertcustomer');
Route::get('/product','InventoryController@product');
Route::post('/insertproduct','InventoryController@insertproduct');
Route::get('/purchase','InventoryController@purchase');
Route::post('/insertpurchase','InventoryController@insertpurchase');
Route::get('/sales','InventoryController@sales');
Route::post('/insertsales','InventoryController@insertsales');
Route::get('/delete/{cid}','InventoryController@delete');
Route::get('/edit/{cid}','InventoryController@edit');





