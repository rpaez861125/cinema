<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracast\Flash\Flash;
use Validator;
use Illuminate\Validation\Rule;
use App\Category;
use App\Tag;
use App\User;
use App\Article;
use App\Image;
use App\Http\Requests\ArticlesRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $articles = Article::search($request->title)->orderBy('id', 'DESC')->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        }); 

        return view ('admin.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        $users = User::orderBy('name', 'ASC')->pluck('name', 'id');

        return view ('admin.articles.create')
        ->with('categories', $categories)
        ->with('tags', $tags)
        ->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesRequest $request)
    {
       if($request->file('image'))
       {
        $file = $request->file('image');
        $name = 'cinema_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '\imagenes\articles';
        $file->move($path, $name);
       }
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        flash("Se ha registrado el artículo ". $article->title . " de forma exitosa!" )->success();
        return redirect()->route('articles.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->category;
        $my_tag = $article->tags->pluck('id')->ToArray();
                       
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $tag = Tag::orderBy('name', 'DESC')->pluck('name', 'id');

        return view ('admin.articles.edit')
        ->with('categories', $categories)
        ->with('article', $article)
        ->with('tag', $tag)
        ->with('my_tag', $my_tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tag);

        flash("Se ha modificado el artículo ". $article->title . " de forma exitosa!" )->warning();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        flash("Se ha eliminado el artículo ". $article->title . " de forma exitosa!" )->error();
        return redirect()->route('articles.index');
    }
}
