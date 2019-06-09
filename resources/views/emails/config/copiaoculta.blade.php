
    @extends('layout')

    @section('content')

    <!-- Incluir alertas -->
        @include('errors.alertas')
      <!-- Incluir alertas -->
        <div class="row">

            <div class="col-md-12">
                <fieldset>
                    <form action="/configuraciones/notificaciones/copiaoculta" method="POST">  
                    {{csrf_field()}}  
                        
                            <h3>Copia Oculta</h3>

                            <div class="form-group">
                                <input type="email" name="emailBBC" placeholder="Ingrese correo electrónico" class="form-control" style="text-transform:uppercase;"">
                            </div>
                                
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Añadir</button>
                            </div>                                
                    </form>
                </fieldset>
                <small id="emailHelp" class="form-text text-muted">Los datos que se encuentren registrados servirán para la configuración del servidor de correo.</small>
                <fieldset>
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
                                <a href="/configuraciones/notificaciones/copiaoculta/{{ $confbbc->id}}/eliminar" class="btn btn-danger btn-sm" title="Eliminar">
                                                <span class="fa fa-pencil">Eliminar</span>
                                </a>
                                </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>                            
                </fieldset>   
            </div>


        </div>
    @endsection
