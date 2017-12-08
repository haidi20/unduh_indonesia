<?php

Route::get('/', 'UtamaController@index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/relawan','RelawanController@tampil')->name('landingpage.relawan');
Route::resource('/admin/relawan','RelawanController');
Route::resource('/blog','BlogController');
