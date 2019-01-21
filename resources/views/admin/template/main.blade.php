<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default') | Panel de Administración</title>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" >  
</head>
<body> 
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner"> 
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="imagenes/Slaider-2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>CINEMA</h5>
                        <p>"Los auténticos actores son esa raza indomable que interpreta los anhelos y fantasmas del inconsciente colectivo."</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/Slider-1.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>CINEMA</h5>
                        <p>"El cine es un vehículo de expresión, pero no estoy muy seguro de que sea un arte."</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/Slaider-3.jpg" alt="Third slide">
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
       
    <header>            
        @include('admin.template.partials.nav')  
    </header>
    <div class="container-fluid">
       
    <footer>
           
    </footer>

    <section>
        @yield('content')
    </section>
</div>


    <script src="{{ asset('plugins/styles/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/styles/jquery.js') }}"></script>
    <script src="{{ asset('plugins/styles/bootstrap.min.js') }}"></script>  
</body>
</html>