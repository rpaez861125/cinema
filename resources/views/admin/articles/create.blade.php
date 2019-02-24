@extends('admin.template.main')

@section('title', __('app.create_article'))

@section('content')

    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files'=>true]) !!}

    <div class="border p-1" > 
        <div class="form-group mt-1 row">
            {!! Form::label('title', __('app.title').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6" >
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => __('app.title'),
                'required']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('category_id', __('app.categories').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6">
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control select_category',
                'required']) !!}
            </div>   
        </div>
        <div class="form-group row">
                {!! Form::label('content', __('app.content').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('content', null, ['class' => 'form-control content_text', 'placeholder' => __('app.content'),
                    'required'])!!}
                </div>
        </div>
        <div class="form-group row" >
            {!! Form::label('tags', __('app.tags').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6">
                {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select_tag', 'multiple']) !!}
            </div>
        </div>
        <div class="form-group row">
                {!! Form::label('image', __('app.images').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-sm-6">
                    {!! Form::file('image') !!}
                </div>
        </div>
        <div class="form-group row mb-0 mt-1">
                <div class="col-md-6 offset-md-4">
                    {!! Form::submit(__('app.register'), ['class' => 'btn btn-primary']) !!}
                    <a href=" {{ route('articles.index')}} " class="btn btn-primary mx-5">{{ __('app.cancel') }}</a>
                </div>
        </div>
        
    </div>
    {!! Form::close() !!}
    
@endsection

@section('js')
    <script>
        $('.select_tag').chosen({
            placeholder_text_multiple: "{{ __('app.tags_phoder') }}", 
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