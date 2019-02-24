@extends('admin.template.main')

@section('title', __('app.create_tag'))

@section('content')

    {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

    <div class="border p-1">
        <div class="form-group mt-1 row">
            {!! Form::label('name', __('app.name').':', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
           <div class="col-sm-6">{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('app.name'),
             'required']) !!}</div>
        </div>
        <div class="form-group row mb-0 mt-1">
            <div class="col-md-6 offset-md-4">
                {!! Form::submit(__('app.register'), ['class' => 'btn btn-primary']) !!}
                <a href=" {{ route('tags.index')}} " class="btn btn-primary mx-5">{{ __('app.cancel') }}</a>
            </div>
        </div>
    </div>       

    {!! Form::close() !!}

@endsection