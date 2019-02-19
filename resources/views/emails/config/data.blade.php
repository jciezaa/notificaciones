
    @extends('layout')

    @section('content')

    <!-- Formulario principal para editar proyectos -->

                @if(session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification')}}
                    </div>
                @endif


                @if(count($errors)>0)
                    <div    class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>     
               @endif

            <div class="row">

                <div class="col-md-9">                                       
                      
                        <fieldset>
                            <h3>Adjuntar base de datos</h3>
                        <form action="/importarDatabase" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                           <div class="form-group">
                            <div class="input-group mb-3">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file-1" onchange="atento()" name="excel">
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

                        <h4>Muestra de base de datos</h4>

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