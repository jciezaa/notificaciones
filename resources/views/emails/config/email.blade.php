
    @extends('layout')

    @section('content')

    <!-- Incluir alertas -->
        @include('errors.alertas')
      <!-- Incluir alertas -->



            <div class="row">

                <div class="col-md-9">

                    <form action="/configuraciones/email" method="POST">  
                    {{csrf_field()}}  
<fieldset>
                    <h3>Configuración del Email</h3>

                    <div class="form-group">

                        <label for="asunto">Asunto</label>
                        <input type="text" class="form-control" name="asunto"  placeholder="Ingresa el asunto del email" value="{{ $confemail->asunto }}">

                        <label for="saludoinicial">Saludo inicial</label>
                        <input type="text" class="form-control" name="saludoinicial"  placeholder="Ingresa el saludo inicial" value="{{ $confemail->saludoinicial }}">


                        <label for="primerParrafo">Primer párrafo</label>
                        <textarea class="form-control" name="primerParrafo" rows="3">{{ $confemail->primerparrafo }}</textarea> 

                        <label for="segundoParrafo">Segundo párrafo</label>
                        <textarea class="form-control" name="segundoParrafo" rows="3">{{ $confemail->segundoparrafo}}</textarea> 

                        <label for="saludoFinal">Saludo final</label>
                        <input type="text" class="form-control" name="saludoFinal"  placeholder="Ingresa el saludo final" value="{{ $confemail->saludofinal }}">

                        <label for="firma">Firma</label>
                        <input type="text" class="form-control" name="firma"  placeholder="Ingresa la firma del mensaje" value="{{ $confemail->firma }}">

                    </div>

                            <small id="emailHelp" class="form-text text-muted">El email se enviará a todos los destinatarios con asunto y mensaje que se encuentre registrada en esta configuración.</small><br>

                        <div class="form-group">
                            <button class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    

                    </fieldset>

                    </form>
                    

                </div>

            </div>
    @endsection
