

{{-- Alertas en las vistas --}}

@if(session('notification'))
<div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;        
    </button> {{ session('notification')}}
</div>
@endif

@if(session('alerta'))
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button> 
    {{ session('alerta')}}
</div>
@endif

@if(count($errors)>0)
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif