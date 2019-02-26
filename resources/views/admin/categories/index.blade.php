@extends('admin.template.main')

@section('title', __('app.category_list'))

@section('content')

<div class="container">    
    <table class="table table-striped mt-1 border ">
        <thead class="thead-light">
          <tr>
            <th scope="col">{{ __('app.id') }}</th>
            <th scope="col">{{ __('app.name') }}</th>
            @if (Auth::user()->admin())
             <th scope="col">{{ __('app.action') }}</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @foreach ($categorys as $category)
              <tr>
                <td> {{ $category->id }} </td>
                <td> {{ $category->name }} </td>
                @if (Auth::user()->admin())                 
                  <td> 
                      <a href=" {{ route('categories.edit', $category->id) }} " class="btn btn-link" >
                        <span style="color: primary" >
                          <i class="fas fa-edit" aria-hidden="true"></i>
                        </span>
                      </a>
                      <a href=" {{ route('categories.destroy', $category->id) }} " class="btn btn-link" onclick="return confirm('{{ __('app.confirm_categry') }}')">
                        <span style="color: red" >
                        <i class="far fa-trash-alt" aria-hidden="true"></i>
                        </span>
                      </a>                      
                  </td>
                @endif
              </tr>
          @endforeach
        </tbody>
      </table>
     <div class="d-flex d-inline-block justify-content-around">
        {!! $categorys->render() !!}
        <a href=" {{ route('categories.create')}} " class="btn btn-primary m-2">{{ __('app.register') }}</a>
     </div>
     
</div>
    
@endsection