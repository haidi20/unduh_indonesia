<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Blog;

class UtamaController extends Controller
{
    public function index(){
        session()->put('navbar','landingpage');
        $blog = Blog::orderBy('created_at')->paginate(3);
        return view('landingpage.index',compact('blog'));
    }
}
