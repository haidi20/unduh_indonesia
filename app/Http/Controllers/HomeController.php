<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        session()->put('navbar','admin');
        return view('admin.index');
    }
}
