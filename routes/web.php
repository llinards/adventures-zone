<?php

use App\Http\Controllers\PrivacyPolicyController;

Auth::routes([
    'register' => false,
    'reset'    => false,
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
    'prefix'     => '{locale}',
    'where'      => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setLocale',
], static function () {
    Route::get('/', 'HomeController@index');
    Route::get('/privatuma-politika', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');
    Route::get('/{attraction}', 'ProductsController@index');
});

Route::get('/', static function () {
    return redirect(app()->getLocale());
});




