@extends('admin.template.main')

@section('title', 'Crear Articulo')

@section('content')

    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files'=>true]) !!}

    <div class="border p-1" > 
        <div class="form-group mt-1 row">
            {!! Form::label('title', 'Título:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6" >
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título',
                'required']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('category_id', 'Categoría:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6">
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control select_category',
                'required']) !!}
            </div>   
        </div>
        <div class="form-group row">
                {!! Form::label('content', 'Contenido:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('content', null, ['class' => 'form-control content_text', 'placeholder' => 'Contenido',
                    'required'])!!}
                </div>
        </div>
        <div class="form-group row" >
            {!! Form::label('tags', 'Tags:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6">
                {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select_tag', 'multiple']) !!}
            </div>
        </div>
        <div class="form-group row">
                {!! Form::label('image', 'Imagen:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-sm-6">
                    {!! Form::file('image') !!}
                </div>
        </div>
        <div class="form-group row mb-0 mt-1">
                <div class="col-md-6 offset-md-4">
                    {!! Form::submit('Regristar', ['class' => 'btn btn-primary']) !!}
                    <a href=" {{ route('articles.index')}} " class="btn btn-primary mx-5">Cancelar</a>
                </div>
        </div>
        
    </div>
    {!! Form::close() !!}
    
@endsection

@section('js')
    <script>
        $('.select_tag').chosen({
            placeholder_text_multiple: "Seleccione no mas de 3 tags..", 
            max_selected_options: 3,
            search_contains: true,
            no_results_text: "No se encontro resultado",
        });
        $('.select_category').chosen({
            no_results_text: "No se encontro resultado",
        });

       /*  $('.content_text').trumbowyg({
            
        }); */
    </script>
@endsection