<?php

Route::get('/', 'UtamaController@index');

Route::get('/admin', 'DashboardController@index');
Route::resource('/blog','BlogController');
