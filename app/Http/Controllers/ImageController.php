<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function home (){
        $images= Image::all();
        return view('home', compact('images'));
    }
    public function store(Request $request){
        $store= new Image();
        $store->name =$request->name;
        $store->src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        $store->save();
        return redirect()->route('admin');
    }
    public function admin (){
        $images= Image::all();
        return view('back.admin', compact('images'));
    }
    public function create (){
        $images= Image::all();
        return view('back.pages.create', compact('images'));
    }
    public function show ($id){
        $image= Image::find($id);
        return view('pages.show', compact('image'));

    }
}
