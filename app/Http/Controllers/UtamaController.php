<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class UtamaController extends Controller
{
    public function index(){
        return view('landingpage.index');
    }
}
