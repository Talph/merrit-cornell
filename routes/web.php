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

Route::get('/', function () {return view('website.welcome');})->name('welcome');

Auth::routes();
// route::get('/', 'HomeController@home')->name('homepage');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/who-we-are', 'HomeController@about')->name('about');
Route::get('/what-we-do', 'HomeController@services')->name('services');
Route::post('/contact', 'EmailController@contact_us')->name('contact-send');
Route::get('/contact-us', 'HomeController@contact_page')->name('contact-us');




