@extends('admin.template.main')

@section('title', 'Editar Categoría '. $category->name )

@section('content')

    {!! Form::open(['route' => ['category.update', $category], 'method' => 'PUT', 'class' => 'form-inline justify-content-center flex-column flex-md-row']) !!}

    <div class="border p-1">
        <div class="form-group my-2">
            {!! Form::label('name', 'Nombre:', ['class' => 'mx-2 d-none d-md-block row-sm-6']) !!}
            {!! Form::text('name', $category->name , ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}
        </div>
        <div class="form-group justify-content-around">
          {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection