
    @extends('layout')

    @section('content')

        <!-- Incluir alertas -->
        @include('errors.alertas')
      <!-- Incluir alertas -->
	
	<div class="row">
		
		<div class="col-md-4 d-flex align-items-stretch">

				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				  <div class="card-header">DOCENTES</div>
				  <div class="card-body">
				    <h2 class="card-title">{{ $teachers}}</h2>
				    <p class="card-text">Serán notificacos vía correo.</p>
				  </div>
				</div>
			
		</div>


		<div class="col-md-4 d-flex align-items-stretch">
			<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
				  <div class="card-header">ALUMNOS</div>
				  <div class="card-body">
				    <h2 class="card-title">{{ $correoAlumnos }}</h2>
				    <p class="card-text">Serán notificados vía correo.</p>
				  </div>
				</div>
		</div>


		<div class="col-md-4 d-flex align-items-stretch">
			<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
				  <div class="card-header">TIEMPO ESTIMADO</div>
				  <div class="card-body">
				    <h2 class="card-title">{{ $tiempo }}</h2>
				    <p class="card-text">Minutos es el tiempo estimado para la notificación de {{ $teachers}} docentes y {{ $correoAlumnos }} alumnos.</p>
				  </div>
				</div>
		</div>

	</div>


    @endsection