<?php

/*
 * Faqs Management
 */
Route::group(['namespace' => 'NonMlsProperties'], function () {
    Route::resource('nonmlsproperties', 'NonMlsPropertyController', ['except' => ['show']]);

    //For DataTables
    Route::post('nonmls/get', 'NonMLSTableController')->name('nonmls.get');
});

