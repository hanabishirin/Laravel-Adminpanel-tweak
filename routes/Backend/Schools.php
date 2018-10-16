<?php

/*
 * Faqs Management
 */
Route::group(['namespace' => 'Schools'], function () {
    Route::resource('schools', 'SchoolsController', ['except' => ['show']]);

    //For DataTables
    Route::post('schools/get', 'SchoolsTableController')->name('schools.get');

    Route::post('schools/zone','SchoolsController@editZone')->name('schools.zone');
});

