<ul class="nav nav-pills flex-column">

  <li class="nav-item dropdown">
    <a @if(request()->is('configuraciones','configuraciones/notificaciones/data','configuraciones/notificaciones/copiaoculta','configuraciones/notificaciones/email')) class="nav-link dropdown-toggle dropdown active" @endif class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Config</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="/configuraciones/notificaciones/data">Base de datos</a>
      <a class="dropdown-item" href="/configuraciones/notificaciones/copiaoculta">Copia Oculta</a>
      <a class="dropdown-item" href="/configuraciones/notificaciones/email">Email</a>
    </div>
  </li>

  <li class="nav-item">
    <a @if(request()->is('notificaciones/notificar')) class="nav-link active" @endif class="nav-link" href="/notificaciones/notificar">Notificar</a>
  </li>

</ul>