<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function index(){
        $gallery = GalleryItem::all(['id','title','image_url','category']);

        return response()->json([
            'data'=> $gallery
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title'=>'required|string',
            'category'=>'nullable|string',
            'image'=>'required|image|max:4096'
        ]);

        $path = $request->file('image')->store('gallery','public');

        $item = GalleryItem::create([
            'title'=>$validated['title'],
            'category'=>$validated['category'] ?? null,
            'image_url'=>asset('storage/'.$path)
        ]);

        return response()->json(['data'=>$item]);
    }

    public function destroy($id){
        $item = GalleryItem::findOrFail($id);
        $item->delete();

        return response()->json(['message'=>'Deleted']);

    }
}
