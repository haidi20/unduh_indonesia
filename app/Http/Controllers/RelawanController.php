<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Relawan;

class RelawanController extends Controller
{
    public function index(){
        $relawan = Relawan::paginate(10);

        session()->put('navbar','admin');

        return view('admin.relawan.index',compact('relawan'));
    }

    public function create(){
        return $this->form();
    }

    public function edit($id){
        return $this->form($id);
    }

    public function form($id = null){
        $relawanFind = Relawan::find($id);
        if ($relawanFind) {
            session()->flashInput($relawanFind->toArray());
            $action = route('relawan.update',$id);
            $method = 'PUT';
        }else{
            $action = route('relawan.store');
        }

        $relawan = Relawan::paginate(10);

        return view('admin.relawan.form',compact('action','method','relawan'));
    }

    public function store(){
        return $this->save();
    }

    public function update($id){
        return $this->save($id);
    }

    public function save($id = null){
        if ($id) {
            $relawan = Relawan::find($id);
        }else{
            $relawan = new Relawan;
        }

        $this->validate(request(),[
            'nama'    => 'required',
            'email'   => 'required',
            'hp'      => 'required',
            'alamat'  => 'required',
        ]);

        $relawan->nama    = request('nama');
        $relawan->email   = request('email');
        $relawan->hp      = request('hp');
        $relawan->alamat  = request('alamat');
    }

    public function destroy($id){
        $relawan = Relawan::find($id);
        $relawan->delete();
        return redirect()->back();
    }


}
