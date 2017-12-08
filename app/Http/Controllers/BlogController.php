<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::paginate(10);

        session()->put('navbar','admin');

        return view('admin.blog.index',compact('blog'));
    }

    public function create(){
        return $this->form();
    }

    public function edit($id){
        return $this->form($id);
    }

    public function form($id = null){
        $blogFind   = Blog::find($id);

        if ($blogFind) {
            session()->flashInput($blogFind->toArray());
            $action = route('blog.update',$id);
            $method = 'PUT';
        }else{
            $action = route('blog.store');
            $method = 'POST';
        }

        $blog = Blog::paginate(10);

        session()->put('navbar','admin');

        return view('admin.blog.form',compact('action','method','blog'));
    }

    public function store(){
        return $this->save();
    }

    public function update($id){
        return $this->save($id);
    }

    public function save($id = null){
        if ($id) {
            $blog     = Blog::find($id);
        }else{
            $blog     = new Blog;
        }

        // $this->validate(request(),[
        //     'judul'   => 'required',
        //     'isi'     => 'required',
        //     // 'foto'    => 'required',
        // ]);

        $blog->judul  = request('judul');
        $blog->isi    = request('isi');
        // $blog->foto   = request('foto');
        $blog->save();

        return redirect()->route('blog.index');
    }

    public function destroy($id){
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->back();
    }
}
