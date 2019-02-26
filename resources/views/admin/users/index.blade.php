@extends('admin.template.main')

@section('title', __('app.users_list'))

@section('content')

<div class="container">    
    <table class="table table-striped mt-1 border">
        <thead class="thead-light">
          <tr>
            <th scope="col">{{ __('app.id') }}</th>
            <th scope="col">{{ __('app.name') }}</th>
            <th scope="col">{{ __('app.mail') }}</th>
            <th scope="col">{{ __('app.type') }}</th>
            <th scope="col">{{ __('app.action') }}</th>
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
                      <a href=" {{ route('users.edit', $user->id) }} " class="btn btn-link" >
                        <span style="color: primary" >
                          <i class="fas fa-edit" aria-hidden="true"></i>
                        </span>
                      </a>
                      <a href=" {{ route('users.destroy', $user->id) }} " class="btn btn-link" onclick="return confirm('{{ __('app.confirm') }}')">
                        <span style="color: red" >
                          <i class="far fa-trash-alt"></i>
                        </span>
                      </a>                      
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
     <div class="d-flex d-inline-block justify-content-around">
        {!! $users->render() !!}
        <a href=" {{ route('register') }} " class="btn btn-primary m-2">{{__('app.register')}}</a>
     </div>
     
</div>
    
@endsection