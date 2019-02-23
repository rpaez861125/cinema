@extends('admin.template.main')

@section('title', __('app.edit_user'). $user->name )

@section('content')

    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

    <div class="p-1">
        <div class="form-group mt-1 row">
                 {!! Form::label('name', __('app.name').":", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6"> 
                 {!! Form::text('name', $user->name , ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}
            </div>
        </div>
        <div class="form-group mt-1 row">
                 {!! Form::label('email', __('app.mail').":", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6"> 
                 {!! Form::email('email', $user->email , ['class' => 'form-control', 'placeholder' => 'example@gmail.com',
             'required']) !!}
            </div>
        </div>
        <div class="form-group mt-1 row">
            {!! Form::label('type', __('app.type').":", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6"> 
                {!! Form::select('type', ['miembro' => 'Miembro', 'admin' => 'Administrador'], $user->type , ['class' => 'form-control']) !!}</div>
            </div>
        <div class="form-group row mb-0 mt-1">
            <div class="col-md-6 offset-md-4">
                {!! Form::submit( __('app.edit'), ['class' => 'btn btn-primary']) !!}
                <a href=" {{ route('users.index')}} " class="btn btn-primary mx-5">{{ __('app.cancel') }}</a>
            </div>
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection