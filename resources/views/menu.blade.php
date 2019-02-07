




<ul class="nav nav-pills flex-column">
{{--   <li class="nav-item">
    <a @if(request()->is('configuraciones')) class="nav-link active" @endif class="nav-link active" href="/configuraciones">Configuraciones</a>


  </li> --}}


  <li class="nav-item dropdown">
    <a @if(request()->is('/configuraciones/')) class="nav-link dropdown-toggle dropdown active" @endif class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Config</a>

    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="/configuraciones/remitente">Remitente</a>
      <a class="dropdown-item" href="/configuraciones/copiaoculta">Copia Oculta</a>
      <a class="dropdown-item" href="/configuraciones/email">Email</a>
    </div>
  </li>



{{--   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li> --}}

  <li class="nav-item">
    <a @if(request()->is('notificar')) class="nav-link active" @endif class="nav-link" href="/notificacion">Notificar</a>
  </li>

  <li class="nav-item">
    <a @if(request()->is('reporte')) class="nav-link active" @endif class="nav-link" href="/reporte">Reportes</a>
  </li>
</ul>