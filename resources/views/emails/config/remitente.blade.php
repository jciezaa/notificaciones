
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

                    <button type="button" class="btn btn-primary">Guardar Cambios</button>


                </div>

            </div>
    @endsection
