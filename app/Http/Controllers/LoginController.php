<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    public function index(){
        if (Auth::attempt(['name' => request('nama'),'password' => request('password')])) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function keluar(){
        Auth::logout();
        return redirect()->route('login');
    }
}
