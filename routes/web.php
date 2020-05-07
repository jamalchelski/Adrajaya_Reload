<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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


Route::get('/', 'PagesController@landing')->name('landing');


Route::get('/login', 'HomeController@index')->name('login');
Route::get('/produk', 'PagesController@produk')->name('product');
Route::get('/kontak', 'PagesController@kontak')->name('kontak');
Route::get('/tentang', 'PagesController@tentang')->name('about');
Route::get('/artikel', 'PagesController@artikel')->name('artikel');
Route::get('/pendaftaran', 'PagesController@pendaftaran')->name('pendaftar');
Route::get('/pesan', 'pesanController@index')->name('pesan');
Route::post('/pesan', 'pesanController@store');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/downline', 'HomeController@downline')->name('downline');
Route::get('/home/prabayar', 'HomeController@prabayar')->name('prabayar');
Route::get('/home/pascabayar', 'HomeController@pascabayar')->name('pascabayar');
Route::get('/home/topup', 'HomeController@topup')->name('topup');
Route::get('/home/game', 'HomeController@game')->name('game');
Route::get('/home/ecommerce', 'HomeController@ecommerce')->name('ecommerce');
Route::get('/home/transfer', 'HomeController@transfer')->name('transfer');
Route::get('/home/transfer/syariah', 'HomeController@syariah')->name('syariah');
