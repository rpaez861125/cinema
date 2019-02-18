<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::orderBy('id', 'DESC')->paginate(3);
        $article->each(function($article){
            $article->category;
            $article->images;
        });       
        return view ('front.index')
            ->with('articles', $article);
    }

    
}
