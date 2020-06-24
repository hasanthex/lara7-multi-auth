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


Route::group([
        'name'      => 'admin.',
        'prefix'    => 'admin'
    ],function(){
        Route::get('/dashboard', 'AdminController@index')->name('admin');
    }
);


Route::group([
        'name'      => 'user.',
        'prefix'    => 'user'
    ],function(){
        Route::get('/dashboard', 'UserController@index')->name('user');
    }
);

Route::group([
        'name'      => 'manager.',
        'prefix'    => 'manager'
    ],function(){
        Route::get('/dashboard', 'ManagerController@index')->name('manager');
    }
);

Route::get('/home', 'HomeController@index')->name('home');
