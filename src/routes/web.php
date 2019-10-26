<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Scaffolder\Newsletter\Http\Controllers'], function () {
    Route::get('newsletter/', 'NewsletterController@index')->name('newsletter');
    Route::post('newsletter/', 'NewsletterController@store');    
   
});


Route::group(['namespace' => 'Scaffolder\Newsletter\Http\Controllers\Admin'], function () {
    //index routes
    Route::get('admin/', 'ManagerController@index')->name('index'); 
    //add routes
    Route::get('admin/add', 'ManagerController@create')->name('store');
    Route::post('admin/add', 'ManagerController@store');
    //delete routes
    Route::get('admin/data/{id}', 'ManagerController@destroy')->name('delete');
    //edit routes
    Route::get('/admin/data/{id}/edit', 'ManagerController@edit')->name('update');
    Route::put('/admin/data/{id}/edit', 'ManagerController@update');  
    //sendMail routes
    Route::get('admin/mail', 'MailController@create')->name('mail');
    Route::post('admin/mail', 'MailController@store');      
});
