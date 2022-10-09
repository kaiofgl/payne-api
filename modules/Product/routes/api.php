<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {

    Route::get('/product', [
        'uses' => 'ProductController@all'
    ]);

    Route::get('/product/{id}', [
        'uses' => 'ProductController@find'
    ])->where(['id' => '[0-9]']);

    Route::post('/product', [
        'uses' => 'ProductController@store'
    ]);

    Route::put('/product/{id}', [
        'uses' => 'ProductController@update'
    ])->where(['id' => '[0-9]']);

    Route::delete('/product/{id}', [
        'uses' => 'ProductController@destroy'
    ])->where(['id' => '[0-9]']);
});
