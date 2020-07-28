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

Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', function(){
        return view('admin.dashboard.dashboard');
    })->name('admin.dashboard');

    Route::get('managers', function(){
        return view('admin.manager.index');
    })->name('admin.managers');
    Route::get('managers/create', function(){
        return view('admin.manager.create');
    })->name('admin.managers.create');
});
