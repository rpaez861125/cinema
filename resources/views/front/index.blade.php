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
          <a href="{{ route('front.view.article', $article->slug) }}" >
            @foreach ($article->images as $image)
               <img class="card-img-top" src="{{ asset('/imagenes/articles') }}/{{ $image->name }}" alt="Card image cap" width="650" height="450">
            @endforeach
          </a>
          <div class="card-body">
            <h2 class="card-title">{{ $article->title }}</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="{{ route('front.view.article', $article->slug) }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted d-flex d-inline-block justify-content-around">
            <span style="color: muted" >
                <i class="far fa-folder" aria-hidden="true"></i>
                <a href="{{ route('front.search.category', $article->category->name) }}">{{$article->category->name}}</a>
            </span>

            <span style="color: muted" >
                <i class="far fa-clock" aria-hidden="true"></i>
                {{ $article->created_at->diffForHumans() }}
            </span>            
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
         @include('front.partials.aside')          
      </div>

    </div>
    <!-- /.row -->

  </div>


    
@endsection
