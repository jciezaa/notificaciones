
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
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>

                </div>

            </div>
    @endsection
