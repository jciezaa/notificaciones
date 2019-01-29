<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Web para notificaciones a los alumnos</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/cover/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


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
<!-- Imprimir alertas -->
            @if(session('notification'))
                <div class="alert alert-success">
                    {{ session('notification')}}
                </div>
            @endif

<!-- Imprimir errores -->
            @if(count($errors)>0)
                <div    class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


 <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">UPC</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
{{--                   <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li> --}}
                </ul>
              </nav>
            </div>
          </div>
          
          <form action="notificacion" method="POST">
            {{csrf_field()}}

            <div class="inner cover">
              <h1 class="cover-heading">Equipo de programación</h1>
              <p class="lead">Notificar a los docentes y alumnos sobre sus cruces de evaluaciones</p>
              <p class="lead">
                <button class="btn btn-lg btn-default" onclick="update()">Notificar</button>
                <br>              
                    <div class="progress" id="progress_status">
                      <div class="bar" id="myprogressBar"></div>
                    </div>
              </p>
            </div>
          </form>

{{--             <div class="inner cover">
              <h1 class="cover-heading">Equipo de programación</h1>
              <p class="lead">Notificar a los docentes y alumnos sobre sus cruces de evaluaciones</p>
              <p class="lead">
                <a  href="/notificacion" class="btn btn-lg btn-default">Notificar</a>
                <br>              
                    <div class="progress" id="progress_status">
                      <div class="bar" id="myprogressBar"></div>
                    </div>
              </p>
            </div> --}}




          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

  

      <script> 
        function update() { 
          var element = document.getElementById("myprogressBar");
          var width = 1; 
          var identity = setInterval(scene, 1); 
          function scene() { 
            if (width >= 100) { 
              clearInterval(identity);
            } else { 
              width++;  
              element.style.width = width + '%';  
            } 
          } 
        } 
      </script> 












    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>