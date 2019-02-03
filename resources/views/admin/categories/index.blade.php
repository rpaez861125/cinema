@extends('admin.template.main')

@section('title', 'Lista de Cartegorías')

@section('content')

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
          @foreach ($categorys as $category)
              <tr>
                <td> {{ $category->id }} </td>
                <td> {{ $category->name }} </td>
                <td> 
                      <a href=" {{ route('categories.edit', $category->id) }} " class="btn btn-warning" >
                        <img src="{{ asset('imagenes/user/wrench.svg') }}" width="20" height="20" class="d-inline-block align-content-center" alt="">  
                      </a>
                      <a href=" {{ route('categories.destroy', $category->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro que sea eleminar la categoria?')">
                        <img src="{{ asset('imagenes/user/x.svg') }}" width="20" height="20" class="d-inline-block align-content-center" alt="">
                      </a>                      
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
     <div class="d-flex d-inline-block justify-content-around">
        {!! $categorys->render() !!}
        <a href=" {{ route('categories.create')}} " class="btn btn-primary m-2">Crear Categoria</a>
     </div>
     
</div>
    
@endsection