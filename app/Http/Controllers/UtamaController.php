<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Blog;

class UtamaController extends Controller
{
    public function index(){
        //session()->put('navbar','landingpage');
        return view('landingpage.index');
    }
}
