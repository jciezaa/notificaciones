<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <title>Equipo de programación, sistema de notificaciones</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css" media="screen">
  <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">



  <style>
    #progress_status {
      width: 100%;
      background-color: #ddd;
    }

    #myprogressBar {
      width: 1%;
      height: 20px;
      background-color: #4CAF50;
    }
  </style>
</head>

<body>


  <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">

    <div class="container">
      <a href="/" class="navbar-brand">Equipo de programación</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="/notificaciones">Notificaciones</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">Guías</a>
          </li>

        </ul>
        <ul class="nav navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/jciezaa" target="_blank">Créditos</a>
          </li>

        </ul>

      </div>
    </div>

  </div>



  <div class="container">

    <div class="page-header" id="banner">
      <div class="row">
        <div class="col-lg-12 col-md-7 col-sm-5">
          <p class="lead" align="center"><b>Registros Académicos Corporativo</b></p>
          </br>
          </br>
        </div>
      </div>
    </div>


    <div class="row">

      <div class="col-md-2">

          @if(request()->is('/','notificaciones','configuraciones/notificaciones/data','configuraciones/notificaciones/copiaoculta','configuraciones/notificaciones/email','notificaciones/notificar'))
            @include('menuNotificaciones')
          @endif

          @if(request()->is('planificacion','configuraciones/planificacion/data'))
            @include('menuPlanificacion')
          @endif

        </div>

      <div class="col-md-10">
            @yield('content')
      </div>

    </div>

    <footer id="footer">
      <div class="row">
        <div class="col-lg-12">

          <p class="float-lg-right">Desarrollado por <a href="https://twitter.com/jciezaa" target="_blank">Jesús Cieza Arteaga</a>.</p>
          {{--
          <p>Diseño por <a href="https://bootswatch.com/lux/" target="_blank">Bootswatch Lux</a>.</p>
          <p>Basado en <a href="https://getbootstrap.com" rel="nofollow">Bootstrap</a>. Iconos de <a href="http://fontawesome.io/"
              rel="nofollow">Font Awesome</a>. Web fonts from <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>
          --}}

        </div>
      </div>

    </footer>


  </div>

  <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
  <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://bootswatch.com/_assets/js/custom.js"></script>

</body>

</html>