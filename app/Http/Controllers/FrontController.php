<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class FrontController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

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
