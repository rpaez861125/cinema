@extends('admin.template.main')

@section('title', 'Crear Categoría')

@section('content')

    {!! Form::open(['route' => 'category.store', 'method' => 'POST', 'class' => 'form-inline justify-content-center flex-column flex-md-row']) !!}

    <div class="border p-1">
        <div class="form-group my-2">
            {!! Form::label('name', 'Nombre:', ['class' => 'mx-2 d-none d-md-block row-sm-5']) !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre',
             'required']) !!}
        </div>
        <div class="form-group justify-content-around">
          {!! Form::submit('Regristar', ['class' => 'btn btn-primary']) !!}
        </div> 
    </div>       

    {!! Form::close() !!}

@endsection