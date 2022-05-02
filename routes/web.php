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
  'register' => false,
  'reset' => false
]);

Route::middleware(['auth'])->group(function () {
  Route::get('/admin', 'AttractionsController@index');
  Route::get('/admin/create', 'AttractionsController@create');
  Route::post('/admin', 'AttractionsController@store');
  Route::get('/admin/{attraction}/edit', 'AttractionsController@edit');
  Route::patch('/admin/{attraction}', 'AttractionsController@update');
  Route::delete('/admin/delete', 'AttractionsController@destroy');

  Route::get('/admin/images/add', 'ImagesController@create');
  Route::post('/admin/images', 'ImagesController@store');
  Route::delete('/admin/image/{image}', 'ImagesController@destroy');

  Route::get('/admin/footer/{id}/edit', 'FooterController@edit');
  Route::patch('/admin/footer/{footer}', 'FooterController@update');

  Route::get('/admin/pricelist', 'PricelistController@index');
  Route::get('/admin/pricelist/{item}/edit', 'PricelistController@edit');
  Route::patch('/admin/pricelist/{item}', 'PricelistController@store');

});

Route::group([
  'prefix' => '{locale}',
  'where' => ['locale' => '[a-zA-Z]{2}'],
  'middleware' => 'setLocale'
], function() {
  Route::get('/', 'HomeController@index');
  Route::get('/{attraction}', 'ProductsController@index');
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});




