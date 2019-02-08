<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
  </button>
<a class="navbar-brand" href="/cinema/public">
  <img src="{{ asset('imagenes/bt.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
      Cinema
</a>
<div class="collapse navbar-collapse text-center" id="navbarTogglerDemo01"> 
@if (Auth::user())
    <div class="navbar-nav mr-auto ml-auto text-center">
      <a class="nav-item nav-link active"  href="/cinema/public">Inicio</a>
      <a class="nav-item nav-link" href=" {{ route('users.index')}} ">Usuarios</a>
      <a class="nav-item nav-link" href=" {{ route('categories.index')}} ">Categorías</a>
      <a class="nav-item nav-link" href=" {{ route('articles.index')}} ">Artículos</a>
      <a class="nav-item nav-link" href=" {{ route('images.index')}} ">Imagenes</a>
      <a class="nav-item nav-link" href="{{ route('tags.index')}}">Tags</a>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> 
  </div>
@endif 
  <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
         @endif
         
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
  </ul>
  
</div>
</nav>