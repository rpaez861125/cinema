@extends('admin.template.main')

@section('title', 'Lista de Tags')

@section('content')

    {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form mt-1 col-md-2'])!!}
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon2">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}
        </div>      
    {!! Form::close()!!}
<div class="container">    
    <table class="table mt-1 border ">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tags as $tag)
              <tr>
                <td> {{ $tag->id }} </td>
                <td> {{ $tag->name }} </td>
                <td> 
                      <a href=" {{ route('tags.edit', $tag->id) }} " class="btn btn-warning" >
                        <i class="fa fa-cog" aria-hidden="true"></i>
                      </a>
                      <a href=" {{ route('tags.destroy', $tag->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro que sea eleminar la categoria?')">
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
        {!! $tags->render() !!}
        <a href=" {{ route('tags.create')}} " class="btn btn-primary m-2">Crear Tags</a>
     </div>
     
</div>
    
@endsection