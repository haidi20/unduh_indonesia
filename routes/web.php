<?php

Route::post('loginn','LoginController@index')->name('loginn');
Route::get('Loginn/keluar','LoginController@keluar')->name('loginn.keluar');

//landingpage
Route::get('/', 'UtamaController@index');
Route::get('/relawan','RelawanController@tampil')->name('landingpage.relawan');

// admin
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('admin');
  Route::resource('/admin/relawan','RelawanController')->middleware('admin');
  Route::resource('/blog','BlogController')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
