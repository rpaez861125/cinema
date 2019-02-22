<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;

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

    public function searchCategory($name) 
    {
       $category = Category::SearchCategory($name)->first();
       $article = $category->articles()->paginate(3);
       $article->each(function($article){
            $article->category;
            $article->images;
         });
        return view ('front.index')
        ->with('articles', $article);
    }

    public function searchTag($name)
    {
        $tag = Tag::SearchTag($name)->first();
        $article = $tag->articles()->paginate(3);
       $article->each(function($article){
            $article->category;
            $article->images;
         });
        return view ('front.index')
        ->with('articles', $article);

    }

    public function viewArticle($slug)
    {
        $article = Article::findBySlug($slug);
        $article->category;
        $article->user;
        $article->tags;
        $article->images;

        return view ('front.article')->with('article', $article);
    }

    
}
