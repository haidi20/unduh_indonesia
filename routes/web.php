<?php

Route::get('/', function(){
    return view('landingpage.index');
});
Route::get('/admin', function(){
    return view('admin.index');
});
