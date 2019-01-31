@extends('admin.template.main')

@section('title', 'Editar Usuario '. $user->name )

@section('content')

    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

    <div class="p-1">
        <div class="form-group mt-1 row">
                 {!! Form::label('name', 'Nombre:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6"> 
                 {!! Form::text('name', $user->name , ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}
            </div>
        </div>
        <div class="form-group mt-1 row">
                 {!! Form::label('email', 'Correo Electrónico:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6"> 
                 {!! Form::email('email', $user->email , ['class' => 'form-control', 'placeholder' => 'example@gmail.com',
             'required']) !!}
            </div>
        </div>
        <div class="form-group mt-1 row">
            {!! Form::label('type', 'Tipo:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6"> 
                {!! Form::select('type', ['miembro' => 'Miembro', 'admin' => 'Administrador'], $user->type , ['class' => 'form-control']) !!}</div>
            </div>
        <div class="form-group row mb-0 mt-1">
            <div class="col-md-6 offset-md-4">
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            </div>
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection