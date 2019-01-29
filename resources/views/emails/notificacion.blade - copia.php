<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Lista de alumno son cruce</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

      <style>
                        /* Cambios sobre la propia tabla */
                table {
                  border-collapse:collapse;
                  border:1px solid #CCC;
                }
                /* Espacio de relleno en celdas y cabeceras */
                td, th {
                  padding:10px;
                }
                /* Modificación de estilos en cabeceras */
                th {
                  background:#000;
                  color:#FFF;
                  text-transform:uppercase;
                }
                /* Modificación de estilos en celdas */
                td {
                  text-align:center;
                  border-bottom:2px solid #111;
                  color:#333;
                  font-size:18px;
                }
    </style>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <p class="text-muted">Estimado(a) profesor(a):<br><br>
                Durante la semana de exámenes finales tenemos alumnos que por motivos de dispersión de asignaturas poseen cruce dentro de sus evaluaciones. Por tal motivo, se está adjuntando la lista de alumnos con cruce de sus secciones a cargo con la finalidad de apoyarlos.<br>

                Como alternativa podría organizarlos para que logren sustentar como primer o último grupo o dentro del horario de sus otras secciones tal que no pierdan sus notas o se vean afectados.<br>

                Para cualquier consulta de Rol de evaluaciones de cada alumno puede seguir la ruta Intranet / Alumnos / Rol de exámenes.<br></p>

                <p class="text-light bg-dark"> Lista de alumnos con cruce. </p><br>
           
            </div>


    </header>
    <br>
    <main role="main">

                    <table class="table">
                      <thead class="thead">
                        <tr>
                          <th scope="col">Asignatura</th>
                          <th scope="col">Sección</th>
                          <th scope="col">Código</th>
                          <th scope="col">Alumno</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                          <td scope="row">{{ $curso->asignatura ."-". $curso->descripcion }}</th>
                          <td>{{ $curso->seccion }}</th>
                          <td>{{ $curso->alumno }}</th>
                          <td>{{ $curso->apellidos }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
    </main>

    <footer class="text-muted">
      <div class="container">       
        <p>REGISTROS ACADÉMICOS</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
