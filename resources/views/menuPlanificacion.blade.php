<ul class="nav nav-pills flex-column">


  <li class="nav-item dropdown">
    <a @if(request()->is('configuraciones','configuraciones/planificacion/data','configuraciones/planificacion/copiaoculta','configuraciones/notificaciones/email')) class="nav-link dropdown-toggle dropdown active" @endif class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Config</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="/configuraciones/planificacion/data">Base de alumnos y cursos</a>
      <a class="dropdown-item" href="/configuraciones/planificacion/copiaoculta">Base de aulas</a>
      <a class="dropdown-item" href="/configuraciones/planificacion/email">Bloques horarios</a>
    </div>
  </li>

  <li class="nav-item">
    <a @if(request()->is('planificacion/notificar')) class="nav-link active" @endif class="nav-link" href="/planificacion/notificar">Notificar</a>
  </li>

</ul>