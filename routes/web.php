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

Route::get('/', "MainController@home")->name("page_home");

Route::get('/contacts', "MainController@contacts")->name("page_contacts");

Route::get('/dresses', "MainController@dresses")->name("page_dresses");
