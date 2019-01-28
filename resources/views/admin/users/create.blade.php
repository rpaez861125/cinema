@extends('admin.template.main')

@section('title', 'Create User')

@section('content')

    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

    <div class="border p-1">
        <div class="form-group mt-2 text-center">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}
        </div>
        <div class="form-group text-center">
            {!! Form::label('email', 'Correo Electrónico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com',
             'required']) !!}
        </div>
        <div class="form-group text-center">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*************',
             'required']) !!}
        </div>
        <div class="form-group text-center">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['' => 'Seleccione nivel..', 'miembro' => 'Miembro',
             'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Regristar', ['class' => 'btn btn-primary']) !!}
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection