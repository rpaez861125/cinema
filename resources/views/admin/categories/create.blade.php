@extends('admin.template.main')

@section('title', 'Crear Categoría')

@section('content')

    {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

    <div class="border p-1">
        <div class="form-group mt-1 row">
            {!! Form::label('name', 'Nombre:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
           <div class="col-sm-6">{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre',
             'required']) !!}</div>
        </div>
        <div class="form-group row mb-0 mt-1">
            <div class="col-md-6 offset-md-4">
                {!! Form::submit('Regristar', ['class' => 'btn btn-primary']) !!}
                <a href=" {{ route('categories.index')}} " class="btn btn-primary mx-5">Cancelar</a>
            </div>
        </div>
    </div>       

    {!! Form::close() !!}

@endsection