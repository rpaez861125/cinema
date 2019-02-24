@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

    <div class="p-1">
        
        <div class="form-group mt-1 row">
            {!! Form::label('name', 'Nombre:', ['class' => 'col-md-4 col-form-label text-md-right']) !!} 
            <div class="col-md-6">{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
                    'required']) !!}</div>
        </div>
        <div class="form-group row">
            {!! Form::label('email', 'Correo Electrónico:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com',
             'required']) !!}</div>
        </div>
        <div class="form-group row">
            {!! Form::label('password', 'Contraseña:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6"> {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*************',
             'required']) !!}</div>
        </div>
        <div class="form-group mt-3 row">
            {!! Form::label('type', 'Tipo:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">{!! Form::select('type', ['miembro' => 'Miembro',
             'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}</div>
        </div>
        <div class="form-group row mb-0 mt-1">
            <div class="col-md-6 offset-md-4">
                {!! Form::submit(__('app.register'), ['class' => 'btn btn-primary']) !!}
                <a href=" {{ route('users.index')}} " class="btn btn-primary mx-5">{{ __('app.cancel') }}</a>
            </div>
        </div>
    </div>       

    {!! Form::close() !!}

@endsection