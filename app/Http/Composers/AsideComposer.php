<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\Repositories\Repositories;
use App\Category;
use App\Tag;

class AsideComposer 
{

    public function compose(View $view)
    {
        $categories = Category::orderBy('name', 'desc')->get();
        $tags = Tag::orderBy('name', 'desc')->get();
        $view->with('categories', $categories)
             ->with('tags', $tags);
    }
}