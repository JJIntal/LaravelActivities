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
    return view('welcome',['name' => 'John']);
});


Route::get('/user/{id?}', function($id = null){
    return 'User ' . $id;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users');
Route::post('/users', 'UserController@store')->name('user.store');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}', 'UserController@show')->name('user.show');
Route::delete('/users/{id}', 'UserController@destroy')->name('user.destroy');


Route::resource('/posts', 'PostController');
