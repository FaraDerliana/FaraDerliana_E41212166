<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    public function input(){
        return view('create');
    }

    public function create(Request $request){
        Pariwisata::create($request->all());
        return redirect()->route('tampildata');
    }

    public function tampildata(){
        $item = Pariwisata::all();
        return view('tampildata', compact('item'));
    }

    public function delete($id){
        $data = Pariwisata::find($id);
        $data->delete();
        return redirect()->route('tampildata');
    }

    public function tampilupdate($id){
        $data = Pariwisata::find($id);
        return view('tampilupdate',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Pariwisata::find($id);
        $data->update($request->all());
        return redirect()->route('tampildata');
    }
}
