@extends('admin.template.main')

@section('title', 'Users List')

@section('content')

<div class="container">    
    <table class="table mt-1 border">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->type }} </td>
                <td> <a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning" ></a> </td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
@endsection