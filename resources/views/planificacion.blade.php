
    @extends('layout')

    @section('content')

        <!-- Incluir alertas -->
        @include('errors.alertas')
      <!-- Incluir alertas -->
	

	  <div class="jumbotron">
		<p class="lead">Bienvenidos al sistema de planificación horaria, para generar automáticamente por favor cargue los archivos para la base de datos.</p>
		<hr class="my-4">
		<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		<p class="lead">
		  <a class="btn btn-primary btn-lg" href="#" role="button">Configuraciones</a>
		</p>
	  </div>



	<div class="row">
		
		<div class="col-md-4 d-flex align-items-stretch">

				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				  <div class="card-header">DOCENTES</div>
				  <div class="card-body">
				    <h2 class="card-title"></h2>
				    <p class="card-text">Serán notificados vía correo.</p>
				  </div>
				</div>
			
		</div>


		<div class="col-md-4 d-flex align-items-stretch">
			<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
				  <div class="card-header">ALUMNOS</div>
				  <div class="card-body">
				    <h2 class="card-title"></h2>
				    <p class="card-text">Serán notificados vía correo.</p>
				  </div>
				</div>
		</div>


		<div class="col-md-4 d-flex align-items-stretch">
			<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
				  <div class="card-header">TIEMPO ESTIMADO</div>
				  <div class="card-body">
				    <h2 class="card-title"></h2>
				    <p class="card-text"></p>
				  </div>
				</div>
		</div>

	</div>


    @endsection