<?php

Route::get('/', 'UtamaController@index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('/relawan','RelawanController');
Route::resource('/blog','BlogController');
