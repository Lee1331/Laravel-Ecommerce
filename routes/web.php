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

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users', 'UsersController', ['except' => ['show' , 'create', 'store']]);
});

Route::namespace('Author')->prefix('author')->name('author.')->middleware('can:manage-packs')->group(function(){

    Route::resource('/packs', 'PackController', ['except' => ['show']]);
});

// Route::namespace('Store')->prefix('store')->name('store.')->group(function(){

//     Route::resource('/', 'StoreController');
// });
Route::resource('store', 'StoreController');

Route::resource('pack', 'PackController');
