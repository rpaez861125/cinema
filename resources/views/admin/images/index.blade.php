@extends('admin.template.main')

@section('title', 'Galería de Imagenes')

@section('content')
    <div class="row">
        @foreach ($images as $images)
            <div class="col-md-4">
                <div class="card mb-3 m-2">
                 <img src="{{ asset('/imagenes/articles') }}/{{ $images->name }}" class="card-img-top" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $images->article->title }}</h5>
                    </div>
                </div>                            
            </div>
        @endforeach
    </div>
@endsection
    
