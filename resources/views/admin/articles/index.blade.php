@extends('admin.template.main')

@section('title', 'Listado de Artículos')

@section('content')
    {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form mt-1 col-md-2'])!!}
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text" id="btnGroupAddon2">
            <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}
    </div>      
    {!! Form::close()!!}
    <div class="container">
        <table class="table table-striped mt-1 border">
            <thead class="thead-light" >
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Títuto</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>                                 
                @foreach ($articles as $article)
                    <tr>
                        <td> {{ $article->id }} </td>
                        <td> {{ $article->title }} </td>
                        <td> {{ $article->category->name }} </td>
                        <td> {{ $article->user->name }} </td>
                        <td>
                            <a href=" {{ route('articles.edit', $article->id) }} " class="btn btn-warning" >
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                </a>
                            <a href=" {{ route('articles.destroy', $article->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro que sea eleminar el artículo?')">
                                <span style="color: black" >
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                </span>
                            </a>  
                        </td>
                    </tr>                  
                @endforeach                               
            </tbody>    
        </table>
        <div class="d-flex d-inline-block justify-content-around">
                {!! $articles->render() !!}
                <a href=" {{ route('articles.create') }} " class="btn btn-primary m-2">Crear Artículo</a>
             </div> 
    </div>
    
@endsection
    
