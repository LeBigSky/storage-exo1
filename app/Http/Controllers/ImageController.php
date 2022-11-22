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
        if($request->has('src')){
        $store->src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        }
        else{
         $store->image =$request->image;   
        }
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
    public function delete($id){
        $image= Image::find($id);
        Storage::delete('public/'.$image->src);
        $image->delete();
        return redirect()->route('admin');
    }
    public function edit($id){
        $image= Image::find($id);
        return view('back.pages.edit', compact('image'));
    }
    public function update (Request $request, $id){
        $update= Image::find($id);
        $update->name =$request->name;
        $update->src= $request->src;
        $update->src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        $update->image =$request->image;   
        $update->save();
        return redirect()->route('admin');
    }
   public function download ($name){
    $path=public_path('storage/'.$name);
    return response()->download($path);
   }
}
