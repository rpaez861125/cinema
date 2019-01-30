@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

    {!! Form::open(['route' => 'users.store', 'method' => 'POST', 'class' => 'form-inline justify-content-center flex-column flex-md-row']) !!}

    <div class="p-1">
        <div class="form-group my-2">
            {!! Form::label('name', 'Nombre:', ['class' => 'mx-2 d-none d-md-block']) !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}
        </div>
        <div class="form-group my-2">
            {!! Form::label('email', 'Correo Electrónico:', ['class' => 'mx-2 d-none d-md-block']) !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com',
             'required']) !!}
        </div>
        <div class="form-group my-2">
            {!! Form::label('password', 'Contraseña:', ['class' => 'mx-2 d-none d-md-block']) !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*************',
             'required']) !!}
        </div>
        <div class="form-group my-2">
            {!! Form::label('type', 'Tipo:', ['class' => 'mx-2 d-none d-md-block']) !!}
            {!! Form::select('type', ['miembro' => 'Miembro',
             'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group justify-content-around">
          {!! Form::submit('Regristar', ['class' => 'btn btn-primary']) !!}
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection