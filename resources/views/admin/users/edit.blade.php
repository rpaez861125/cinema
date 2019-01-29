@extends('admin.template.main')

@section('title', 'Edit User '. $user->name )

@section('content')

    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

    <div class="border p-1">
        <div class="form-group mt-2 text-center">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name , ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}
        </div>
        <div class="form-group text-center">
            {!! Form::label('email', 'Correo Electrónico') !!}
            {!! Form::email('email', $user->email , ['class' => 'form-control', 'placeholder' => 'example@gmail.com',
             'required']) !!}
        </div>
        <div class="form-group text-center">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['miembro' => 'Miembro',
             'admin' => 'Administrador'], $user->type , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection