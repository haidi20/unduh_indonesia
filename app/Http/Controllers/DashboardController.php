<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        session()->put('navbar','admin');
        return view('admin.dashboard.index');
    }
}
