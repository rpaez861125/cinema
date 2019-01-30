@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')

<div class="container">    
    <table class="table mt-1 border">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                <td> 
                    @if ($user->type == 'admin')
                         <span class="badge badge-pill badge-primary">{{ $user->type }}</span>
                      @else
                        <span class="badge badge-pill badge-secondary">{{ $user->type }}</span>
                    @endif  
                </td>
                <td> 
                      <a href=" {{ route('users.edit', $user->id) }} " class="btn btn-warning" >
                        <img src="{{ asset('imagenes/user/wrench.svg') }}" width="20" height="20" class="d-inline-block align-content-center" alt="">  
                      </a>
                      <a href=" {{ route('users.destroy', $user->id) }} " class="btn btn-danger" onclick="return confirm('¿Seguro que sea eleminar el usuario?')">
                        <img src="{{ asset('imagenes/user/x.svg') }}" width="20" height="20" class="d-inline-block align-content-center" alt="">
                      </a>                      
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
     <div class="d-flex d-inline-block justify-content-around">
        {!! $users->render() !!}
        <a href=" {{ route('users.create')}} " class="btn btn-primary m-2">Crear Usuario</a>
     </div>
     
</div>
    
@endsection