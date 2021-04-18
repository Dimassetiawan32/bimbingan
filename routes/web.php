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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'agen'], function(){
    Route::get('index', 'Agen\AgenController@index')->name('agen.index');
    Route::get('create', 'Agen\AgenController@create')->name('agen.create');
    Route::post('save', 'Agen\AgenController@store')->name('agen.save');
    Route::get('edit/{agen}', 'Agen\AgenController@edit')->name('agen.edit');
    Route::patch('update/{agen}', 'Agen\AgenController@update')->name('agen.update');
    Route::delete('delete/{agen}', 'Agen\AgenController@destroy')->name('agen.delete');
});

Route::group(['prefix' => 'paket'], function(){
    Route::get('index', 'Paket\PaketController@index')->name('paket.index');
    Route::get('create', 'Paket\PaketController@create')->name('paket.create');
    Route::post('save', 'Paket\PaketController@store')->name('paket.save');
    Route::get('edit/{paket}', 'Paket\PaketController@edit')->name('paket.edit');
    Route::patch('update/{paket}', 'Paket\PaketController@update')->name('paket.update');
    Route::delete('delete/{paket}', 'Paket\PaketController@destroy')->name('paket.delete');
});

Route::group(['prefix' => 'visa'], function(){
    Route::get('index', 'Visa\VisaController@index')->name('visa.index');
    Route::get('create', 'Visa\VisaController@create')->name('visa.create');
    Route::post('save', 'Visa\VisaController@store')->name('visa.save');
    Route::get('edit/{visa}', 'Visa\VisaController@edit')->name('visa.edit');
    Route::patch('update/{visa}', 'Visa\VisaController@update')->name('visa.update');
    Route::delete('delete/{visa}', 'Visa\VisaController@destroy')->name('visa.delete');
});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('index', 'Transaksi\TransaksiController@index')->name('transaksi.index');
    Route::get('create', 'Transaksi\TransaksiController@create')->name('transaksi.create');
    Route::post('save', 'Transaksi\TransaksiController@store')->name('transaksi.save');
    Route::get('edit/{transaksi}', 'Transaksi\TransaksiController@edit')->name('transaksi.edit');
    Route::patch('update/{transaksi}', 'Transaksi\TransaksiController@update')->name('transaksi.update');
    Route::delete('delete/{transaksi}', 'Transaksi\TransaksiController@destroy')->name('transaksi.delete');
    
});



