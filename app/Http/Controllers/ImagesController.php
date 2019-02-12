<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::all();
        $image->each(function($image){
            $image->article->pluck('title');
        });
        return view ('admin.images.index')->with('images', $image);
    }

    
}
