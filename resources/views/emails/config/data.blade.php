
    @extends('layout')

    @section('content')

    <!-- Incluir alertas -->
        @include('errors.alertas')
      <!-- Incluir alertas -->

            <div class="row">

                <div class="col-md-12">                                       
                      
                        <fieldset>
                            <h3 align="center">Adjuntar base de datos</h3>

                          <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">Lee atentamente!</h4>
                            <p>Debes adjuntar un archivo Excel con las siguientes columnas como cabecera: <br> docente, email, asignatura, descripcion, seccion, medio, alumno, correoalumno, apellidos.</p>
                            <hr>
                          </div>
 
                        <form action="/importarDatabase" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                           <div class="form-group">
                            <div class="input-group mb-3">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file-1" onchange="atento()" name="excel" accept=".xlsx, .xls, .csv">
                                <label id="real-input"class="custom-file-label" for="file-1" >Seleccionar archivo</label>
                              </div>
                              <div class="input-group-append">
                                <button class="input-group-text">Upload</button>
                              </div>
                            </div>
                          </div>
                        </form>




                        <small id="emailHelp" class="form-text text-muted">Al adjuntar una base de datos se eliminará la anterior, por favor tomar en cuenta para prevenir desastres.</small><br>

                        </fieldset>


                        <br>
                        <br>

                        <h4 align="center">Muestra de base de datos</h4>

                        <table class="table table-hover table-sm" style="font-size:8.5px">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Docente</th>
                                  <th scope="col">Correo Docente</th>
                                  <th scope="col">Asignatura</th>
                                  <th scope="col">Descripción</th>
                                  <th scope="col">Sección</th>
                                  <th scope="col">Medio</th>
                                  <th scope="col">Codigo Alumno</th>
                                  <th scope="col">Correo Alumno</th>
                                  <th scope="col">Alumno</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $key => $teacher)
                                <tr class="table-default table-sm">
                                    <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $teacher->docente }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->asignatura }}</td>
                                        <td>{{ $teacher->descripcion }}</td>
                                        <td>{{ $teacher->seccion }}</td>
                                        <td>{{ $teacher->medio }}</td>
                                        <td>{{ $teacher->alumno }}</td>
                                        <td>{{ $teacher->correoalumno }}</td>
                                        <td>{{ $teacher->apellidos }}</td>                                  
                                </tr>
                                @endforeach


                            </tbody>
                        </table>



                </div>

            </div>
            


<script>

    function atento(){

        const realInput = document.getElementById('file-1');
        const fileInfo = document.querySelector('.custom-file-label');
        const info = realInput.value.split(/\\|\//).pop();

        fileInfo.innerHTML  = info;
    }

</script>

    @endsection
