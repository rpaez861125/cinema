@extends('admin.template.main')

@section('title', 'Editar Categoría: '. $category->name )

@section('content')

    {!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT']) !!}

    <div class="border p-1">
        <div class="form-group mt-1 row">
            {!! Form::label('name', 'Nombre:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-sm-6">{!! Form::text('name', $category->name , ['class' => 'form-control', 'placeholder' => 'Nombre Completo',
             'required']) !!}</div>
        </div>
        <div class="form-group row mb-0 mt-1">
            <div class="col-md-6 offset-md-4">
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                <a href=" {{ route('categories.index')}} " class="btn btn-primary mx-5">Cancelar</a>
            </div>
        </div>
    </div>       

    {!! Form::close() !!}

@endsection