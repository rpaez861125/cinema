@extends('admin.template.main')

@section('title', __('app.tags_list'))

@section('content')

    {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form mt-1 col-md-2'])!!}
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon2">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('app.search')]) !!}
        </div>      
    {!! Form::close()!!}
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
          @foreach ($tags as $tag)
              <tr>
                <td> {{ $tag->id }} </td>
                <td> {{ $tag->name }} </td>
                @if (Auth::user()->admin())
                  <td> 
                      <a href=" {{ route('tags.edit', $tag->id) }} " class="btn btn-link" >
                        <span style="color: primary" >
                          <i class="fas fa-edit" aria-hidden="true"></i>
                        </span>
                      </a>
                      <a href=" {{ route('tags.destroy', $tag->id) }} " class="btn btn-link" onclick="return confirm('{{__('app.confirm_tags')}}')">
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
        {!! $tags->render() !!}
        <a href=" {{ route('tags.create')}} " class="btn btn-primary m-2">{{ __('app.register') }}</a>
     </div>
     
</div>
    
@endsection