@extends('admin.template.main')

@section('title', __('app.articles_list'))

@section('content')
    {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form mt-1 col-md-2'])!!}
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text" id="btnGroupAddon2">
            <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => __('app.search')]) !!}
    </div>      
    {!! Form::close()!!}
    <div class="container">
        <table class="table table-striped mt-1 border">
            <thead class="thead-light" >
                <tr>
                    <th scope="col">{{ __('app.id') }}</th>
                    <th scope="col">{{ __('app.title') }}</th>
                    <th scope="col">{{ __('app.categories') }}</th>
                    <th scope="col">{{ __('app.users') }}</th>
                    <th scope="col">{{ __('app.action') }}</th>   
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
                            @if (Auth::user()->id == $article->user->id || Auth::user()->admin())
                                <a href=" {{ route('articles.edit', $article->id) }} " class="btn btn-warning" >
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    </a>                      
                           
                                <a href=" {{ route('articles.destroy', $article->id) }} " class="btn btn-danger" onclick="return confirm('{{ __('app.confirm_articcle') }}')">
                                    <span style="color: black" >
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </span>
                                </a>  
                            @endif
                        </td>
                    </tr>                  
                @endforeach                               
            </tbody>    
        </table>
        <div class="d-flex d-inline-block justify-content-around">
                {!! $articles->render() !!}
                <a href=" {{ route('articles.create') }} " class="btn btn-primary m-2">{{ __('app.register') }}</a>
             </div> 
    </div>
    
@endsection
    
