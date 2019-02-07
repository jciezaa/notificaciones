
    @extends('layout')

    @section('content')

    <!-- Formulario principal para editar proyectos -->

                @if(session('configuration'))
                    <div class="alert alert-success">
                        {{ session('configuration')}}
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

                    <form action="" method="POST">  
                    {{csrf_field()}}  
                        <fieldset>
                            <h3>Copia Oculta</h3>
                                <form>
                            
                                 <input type="hidden" name="" value="">
                                     <div class="form-group">
                                         <input type="email" name="emailBBC" placeholder="Ingrese correo electrónico" class="form-control">
                                     </div>
                                <button type="button" class="btn btn-primary btn-sm">Añadir</button>
                                
                                </form>

                                <small id="emailHelp" class="form-text text-muted">Los datos que se encuentren registrados servirán para la configuración del servidor de correo.</small>


                            <table class="table table-hover">
                            <thead>
                                <th scope="col">#</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Opciones</th>
                            </thead>
                    
                            <tbody>

                                @foreach($confbbc as $key => $confbbc)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $confbbc->valorOne }}</td>
                                        <td>
                                            <button type="button" data-level="" class="btn btn-warning btn-sm" title="Editar" >
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </button>

                                            <a href="" class="btn btn-danger btn-sm" title="Eliminar">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            </table>
                            
                        </fieldset>   
                    </form>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>

                </div>

            </div>
    @endsection
