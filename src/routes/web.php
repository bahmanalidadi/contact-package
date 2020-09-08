<?php

Route::group(['namespace' => 'Bahman7\Contact\Http\Controllers'], function() {
    Route::get('contact', 'ContactController@index');
});