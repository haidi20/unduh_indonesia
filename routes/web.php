<?php

//landingpage
Route::get('/', 'UtamaController@index');
Route::get('/relawan','RelawanController@tampil')->name('landingpage.relawan');

// admin
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('/admin/relawan','RelawanController');
Route::resource('/blog','BlogController');
