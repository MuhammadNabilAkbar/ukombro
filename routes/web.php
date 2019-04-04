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

// Report
Route::get('report/reportproduk' , 'ReportController@reportproduk');
Route::get('report/reportcurr' , 'ReportController@reportcurr');
Route::get('report/reportkategori' , 'ReportController@reportkategori');
Route::get('report/reportuser' , 'ReportController@reportuser');
Route::get('report/reportunit' , 'ReportController@reportunit');
// EndReport

// Transaksi

Route::get('transaksi' , 'TransaksiController@transaksi');
Route::post('transaksi/transaksisementara','TransaksiController@transaksisementara');
Route::post('transaksi/transaksiakhir','TransaksiController@transaksiakhir');
Route::delete('transaksi/deletetransaksi/{id}','TransaksiController@deletetransaksi');

// EndTransaksi

// Master

// Toko
Route::get('master/toko' , 'MasterController@toko');
Route::post('master/savetoko','MasterController@savetoko');

// EndToko

// User
Route::get('master/user' , 'MasterController@user');
Route::get('master/user/adduser' , 'MasterController@adduser');
Route::post('master/user/saveuser','MasterController@saveuser');
Route::get('master/user/edituser/{id}' , 'MasterController@edituser');
Route::post('master/user/updateuser/{id}','MasterController@updateuser');
Route::delete('master/user/deleteuser/{id}','MasterController@deleteuser');
// EndUser

// End Master

// Inventory
// MasterProduk
Route::get('inventory/masterproduk/stok/{id}' , 'InventoryController@stok');
Route::post('inventory/masterproduk/updatestok/{id}','InventoryController@updatestok');

Route::get('inventory/masterproduk' , 'InventoryController@masterproduk');
Route::get('inventory/masterproduk/addmasterproduk' , 'InventoryController@addmasterproduk');
Route::post('inventory/masterproduk/savemasterproduk','InventoryController@savemasterproduk');
Route::get('inventory/masterproduk/editmasterproduk/{id}' , 'InventoryController@editmasterproduk');
Route::post('inventory/masterproduk/updatemasterproduk/{id}','InventoryController@updatemasterproduk');
Route::delete('inventory/masterproduk/deletemasterproduk/{id}','InventoryController@deletemasterproduk');
// EndMasterProduk

// MasterKonfigurasi
// Curr
Route::get('inventory/masterkonfigurasi/curr' , 'InventoryController@curr');
Route::get('inventory/masterkonfigurasi/addcurr','InventoryController@addcurr');
Route::post('inventory/masterkonfigurasi/savecurr','InventoryController@savecurr');
Route::get('inventory/masterkonfigurasi/editcurr/{id}' , 'InventoryController@editcurr');
Route::post('inventory/masterkonfigurasi/updatecurr/{id}','InventoryController@updatecurr');
Route::delete('{id}','InventoryController@deletecurr');

// Kategori
Route::get('inventory/masterkonfigurasi/kategori' , 'InventoryController@kategori');
Route::get('inventory/masterkonfigurasi/addkategori','InventoryController@addkategori');
Route::post('inventory/masterkonfigurasi/savekategori','InventoryController@savekategori');
Route::get('inventory/masterkonfigurasi/editkategori/{id}' , 'InventoryController@editkategori');
Route::post('inventory/masterkonfigurasi/updatekategori/{id}','InventoryController@updatekategori');
Route::get('inventory/masterkonfigurasi/deletekategori/{id}','InventoryController@deletekategori')->name('kategori.delete');
// EndKategori

// Unit
Route::get('inventory/masterkonfigurasi/unit' , 'InventoryController@unit');
Route::get('inventory/masterkonfigurasi/addunit','InventoryController@addunit');
Route::post('inventory/masterkonfigurasi/saveunit','InventoryController@saveunit');
Route::get('inventory/masterkonfigurasi/editunit/{id}' , 'InventoryController@editunit');
Route::post('inventory/masterkonfigurasi/updateunit/{id}','InventoryController@updateunit');
Route::delete('inventory/masterkonfigurasi/deleteunit/{id}','InventoryController@deleteunit');
// EndUnit


// EndMasterKonfigurasi



// End inventory
