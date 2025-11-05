<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function index(){
        $gallery = GalleryItem::all(['id','title','image_url','category']);

        return response()->json([
            'status'=>'success',
            'data'=> $gallery
        ]);
    }
}
