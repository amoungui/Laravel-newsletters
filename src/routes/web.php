<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Scaffolder\Newsletter\Http\Controllers'], function () {
    Route::get('newsletter/', 'NewsletterController@index')->name('newsletter');
    Route::post('newsletter/', 'NewsletterController@store');    
});
