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

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.articles.index');
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
    public function store(Request $request)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
