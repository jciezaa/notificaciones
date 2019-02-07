
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
                    
                     
                    {{csrf_field()}}  
                        <fieldset>
                            <h3>Remitente</h3>
                            <form role="form" action="" method="POST"> 
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email', $confsender->valorTwo)}}">
                              </div>

                            <div class="form-group">
                              <label for="name">Nombre completo</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Nombre completo" value="{{ old('name', $confsender->valorOne) }}">
    
                              <small id="emailHelp" class="form-text text-muted">Los datos que se encuentren registrados servirán para la configuración del servidor de correo.</small>
                            </div>
                            <div class="form-group">
                              <button type="button" class="btn btn-primary">Guardar Cambios</button>
                            </div>      
                            </form>                      
                         </fieldset>


                    
               
                </div>

            </div>
    @endsection
