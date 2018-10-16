<?php

/*
 * Faqs Management
 */
Route::group(['namespace' => 'MlsProperties'], function () {
    Route::resource('mlsproperties', 'MLSPropertyController', ['except' => ['show']]);

    //For DataTables
    Route::post('mlsproperties/get', 'MLSTableController')->name('mlsproperties.get');
});

