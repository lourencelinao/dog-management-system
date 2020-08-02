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
}); //landing page

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home'); //dashboard
Route::get('/dogs', 'DogController@index')->name('dog.index');
Route::get('/application', 'ApplicationController@index')->name('application.index');
Route::get('/people', 'PeopleController@index')->name('people.index');

Route::get('/show', 'DogController@show')->name('people.show'); // test




