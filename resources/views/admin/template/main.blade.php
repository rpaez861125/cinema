<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default') | Panel de Administración</title>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" > 
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}" > 
</head>
<body> 
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner"> 
            <div class="carousel-item active" style="height: 100vh">
            <img class="d-block w-100" src="{{ asset('imagenes/Slider-1.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>CINEMA</h5>
                <p>"Los auténticos actores son esa raza indomable que interpreta los anhelos y fantasmas del inconsciente colectivo."</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="{{ asset('imagenes/Slaider-2.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>CINEMA</h5>
                <p>"El cine es un vehículo de expresión, pero no estoy muy seguro de que sea un arte."</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="{{ asset('imagenes/Slaider-3.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>CINEMA</h5>
                <p>"Una película de éxito es aquella que consigue llevar a cabo una idea original."</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> 
       
    <header class="sticky-top">            
        @include('admin.template.partials.nav')  
    </header>
    <div>
        

        <section class="container  mt-2 pt-2">
                <div class="alert-secondary pl-1 border" style="font: small-caps 100%/200% serif">            
                        <h1>@yield('title', 'Default')</h1>
                </div>                
                <div class="border">
                   <div>@include('flash::message')</div>
                    @include('admin.template.partials.errors')
                    @yield('content')
                </div>                            
            
        </section>

        
        <footer class="container-fluid bg-dark text-white mt-2 py-2 d-flex d-inline-flex justify-content-around" style="width: 100%">
            <p class="justify-content-end">&copy; 2018-2019 Rol@ndo Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            <div class="justify-content-start">
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
        </footer>
        
    </div>


    <script src="{{ asset('plugins/styles/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/styles/jquery.js') }}"></script>
    <script src="{{ asset('plugins/styles/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/styles/all.js') }}"></script> 
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    @yield('js') 
</body>
</html>