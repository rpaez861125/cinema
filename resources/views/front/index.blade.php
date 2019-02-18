@extends('admin.template.main')

@section('title', 'Últimos Artículos')
  

@section('content')   

<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        @foreach ($articles as $article)
        <div class="card mb-4 mt-2">
            @foreach ($article->images as $image)
              <img class="card-img-top" src="{{ asset('/imagenes/articles') }}/{{ $image->name }}" alt="Card image cap" width="650" height="450">
            @endforeach
          <div class="card-body">
            <h2 class="card-title">{{ $article->title }}</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted d-flex d-inline-block justify-content-around">
            <button type="button" class="btn btn-sm btn-outline-secondary">{{$article->category->name}}</button>
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          {!! $articles->render() !!}
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

      <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorías</h5>
          <div class="card-body">
            <div class="justify-content-around">
                <ul class="list-group">
                  <li class="list-group-item" >
                       Noticias 
                    <span class="text-danger badge" >14</span>                     
                  </li>
                  <li class="list-group-item" >
                      Noticias
                      <span class="text-danger badge" >14</span>                      
                  </li>
                  <li class="list-group-item" >
                      Noticias
                      <span class="text-danger badge" >14</span>                         
                  </li>
                </ul>                            
            </div>
          </div>
        </div>

        <!-- Tags Widget -->
        <div class="card my-4">
          <h5 class="card-header">Tags</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>


    
@endsection