<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
  </button>
<a class="navbar-brand" href="/cinema/public">
  <img src="{{ asset('imagenes/bt.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
      Cinema
</a>
<div class="collapse navbar-collapse text-center" id="navbarTogglerDemo01"> 
  <div class="navbar-nav mr-auto ml-auto text-center">
      <a class="nav-item nav-link active"  href="/cinema/public">Inicio</a>
      <a class="nav-item nav-link" href=" {{ route('users.index')}} ">Usuarios</a>
      <a class="nav-item nav-link" href=" {{ route('category.index')}} ">Categorías</a>
      <a class="nav-item nav-link" href="#">Contactos</a>
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
  <div class="d-flex flex-row justify-content-center">
      <a type="button" class="btn btn-outline-light mr-1" href="https://www.facebook.com/" target="_blank">
        <img src="{{ asset('imagenes/social/facebook.svg') }}" width="25" height="25" class="d-inline-block" alt="">
      </a>
      <a type="button" class="btn btn-outline-light mr-1" href="https://www.youtube.com/" target="_blank">
        <img src="{{ asset('imagenes/social/youtube.svg') }}" width="25" height="25" class="d-inline-block" alt="">
      </a>
      <a type="button" class="btn btn-outline-light" href="https://www.twitter.com/" target="_blank">
        <img src="{{ asset('imagenes/social/twitter.svg') }}" width="25" height="25" class="d-inline-block" alt="">
      </a>
  </div>
</div>
</nav>