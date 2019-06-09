@extends('layout') 
@section('content')

<div align="center">

  <div class="inner cover">
    <h1 class="cover-heading">Equipo de programación</h1>
    <p class="lead">Notificar a los docentes y alumnos sobre sus cruces de evaluaciones</p>
    <p class="lead">
      <button class="btn btn-primary" data-toggle="modal" data-target="#modalNotificar">Notificar</button>
      <br>
      <div class="progress" id="progress_status">
        <div class="bar" id="myprogressBar"></div>
      </div>



    </p>
  </div>


  <div class="modal" id="modalNotificar">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmación de notificaciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <p>¿Desea iniciar el emailing?</p>
        </div>
        <div class="modal-footer">

          <form action="/notificaciones/notificacion" method="POST">
            {{csrf_field()}}
            <button class="btn btn-primary" onclick="move()">Aceptar</button>
            <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>


<script>
  function move() {
          cierraPopup();
          var elem = document.getElementById("myprogressBar");
          var width = 1;
          var id = setInterval(frame, {{ $tiempo }});
          function frame() {
            if (width >= 100) {
              clearInterval(id);
            } else {
              width++;
              elem.style.width = width + '%';
            }
          }
      }
      
      function cierraPopup() {
          $("#modalNotificar").modal('hide');//ocultamos el modal
          $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
          $('.modal-backdrop').remove();//eliminamos el backdrop del modal
      }

</script>
@endsection