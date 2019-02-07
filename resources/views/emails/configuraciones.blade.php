
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

                <div class="col-md-6">


                    <form action="" method="POST">  
                    {{csrf_field()}}  
                        <fieldset>
                            <h3>Remitente</h3>
                            <div class="form-group">
                              <label for="remitente">Email</label>
                              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email', $confsender->valorTwo)}}">

                              <label for="fullname">Nombre completo</label>
                                <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Nombre completo" value="{{ $confsender->valorOne }}">

                              <small id="emailHelp" class="form-text text-muted">Los datos que se encuentren registrados servirán para la configuración del servidor de correo.</small>
                            </div>
                        </fieldset>
                    </form>

                        



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
</div>

                <div class="col-md-6">


                <form>    
                      <fieldset>
                        <h3>Configuración del Email</h3>
                        <div class="form-group">
                          <label for="labelAsunto">Asunto</label>
                          <input type="text" class="form-control" id="asuntoEmail" aria-describedby="emailHelp" placeholder="Ingresa el asunto del email" value="{{ $confemail->asunto }}">

                        <label for="labelSaludoInicial">Saludo inicial</label>
                          <input type="text" class="form-control" id="saludoEmail" aria-describedby="emailHelp" placeholder="Ingresa el saludo inicial" value="{{ $confemail->saludoinicial }}">


                        <label for="labelPrimerParrafo">Primer párrafo</label>
                        <textarea class="form-control" id="primerParrafoEmail" rows="3">{{ $confemail->primerparrafo }}</textarea> 

                        <label for="labelSegundoParrafo">Segundo párrafo</label>
                        <textarea class="form-control" id="primerParrafoEmail" rows="3">{{ $confemail->segundoparrafo}}</textarea> 

                        <label for="labelSaludoFinal">Saludo final</label>
                        <input type="text" class="form-control" id="saludoEmail" aria-describedby="emailHelp" placeholder="Ingresa el saludo final" value="{{ $confemail->saludofinal }}">

                        <label for="labelFirma">Firma</label>
                        <input type="text" class="form-control" id="firmaEmail" aria-describedby="emailHelp" placeholder="Ingresa la firma del mensaje" value="{{ $confemail->firma }}">

                        <small id="emailHelp" class="form-text text-muted">El email se enviará a todos los destinatarios con asunto y mensaje que se encuentre registrada en esta configuración.</small>

                        
                        </div>
                    </fieldset>
                </form>

                </div>








            </div>






    @endsection

{{--     @section('scripts')
    <script src="{{ asset('js/admin/projects/edit.js') }}"></script>
    @endsection --}}
