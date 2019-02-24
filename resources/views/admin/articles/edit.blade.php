@extends('admin.template.main')

@section('title', __('app.edit_article').':' . $article->title)

@section('content')

    {!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT']) !!}

    <div class="border p-1" > 
        <div class="form-group mt-1 row">
            {!! Form::label('title', __('app.title').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6" >
                {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título',
                'required']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('category_id', __('app.categories').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6">
                {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select_category',
                'required']) !!}
            </div>   
        </div>
        <div class="form-group row">
                {!! Form::label('content', __('app.content').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('content', $article->content, ['class' => 'form-control content_text',
                    'required'])!!}
                </div>
        </div>
        <div class="form-group row" >
            {!! Form::label('tags', __('app.tags').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6">
                {!! Form::select('tags[]', $tag, $my_tag, ['class' => 'form-control select_tag', 'multiple',
                'required']) !!}
            </div>
        </div>
            <div class="form-group row mb-0 mt-1">
            <div class="col-md-6 offset-md-4">
                {!! Form::submit(__('app.edit'), ['class' => 'btn btn-primary']) !!}
                <a href=" {{ route('articles.index')}} " class="btn btn-primary mx-5">{{ __('app.cancel') }}</a>
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

        $('.content_text').trumbowyg({
            
        });
    </script>
@endsection