@extends('admin.template.main')

@section('title', 'Editar Usuario '. $user->name )

@section('content')

    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT', 'class' => 'form-inline justify-content-center flex-column flex-md-row']) !!}

    <div class="p-1">
        <div class="form-group my-2 text-center">
            {!! Form::label('name', 'Nombre:', ['class' => 'mx-2 d-none d-md-block']) !!}
            {!! Form::text('name', $user->name , ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}
        </div>
        <div class="form-group my-2 text-center">
            {!! Form::label('email', 'Correo Electrónico:', ['class' => 'mx-2 d-none d-md-block']) !!}
            {!! Form::email('email', $user->email , ['class' => 'form-control', 'placeholder' => 'example@gmail.com',
             'required']) !!}
        </div>
        <div class="form-group my-2 text-center">
            {!! Form::label('type', 'Tipo:', ['class' => 'mx-2 d-none d-md-block']) !!}
            {!! Form::select('type', ['miembro' => 'Miembro',
             'admin' => 'Administrador'], $user->type , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group justify-content-around">
          {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection