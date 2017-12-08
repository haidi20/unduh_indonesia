<?php

Route::get('/', 'UtamaController@index');

Route::get('/dashboard', 'DashboardController@index');
Route::resource('/relawan','RelawanController');
Route::resource('/blog','BlogController');
