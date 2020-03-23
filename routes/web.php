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

Auth::routes([
  'register' => true,
  'reset' => false
]);

Route::middleware(['auth'])->group(function () {
  Route::get('/admin', 'AdminController@index');
  Route::get('/admin/create', 'AdminController@create');
  Route::post('/admin', 'AdminController@store');
});

Route::get('/', 'HomeController@index');
Route::get('/{attraction}', 'AttractionsController@index');



