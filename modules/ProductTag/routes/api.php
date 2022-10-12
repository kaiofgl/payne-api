<?php


use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {

    Route::get('/product/{id}/option', [
        'uses' => 'ProductOptionController@index'
    ]);

    Route::post('/product/option', [
        'uses' => 'ProductOptionController@store'
    ]);

    Route::put('/product/option/{id}', [
        'uses' => 'ProductOptionController@update'
    ])->where(['id' => '[0-9]']);

    Route::delete('/product/option/{id}', [
        'uses' => 'ProductOptionController@destroy'
    ])->where(['id' => '[0-9]']);
});
