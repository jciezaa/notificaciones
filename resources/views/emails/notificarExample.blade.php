
    @extends('layout')

    @section('content')


 <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">UPC</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home - CIEZA</a></li>
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
                <button class="btn-success" onclick="update()">Notificar</button>
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

@endsection