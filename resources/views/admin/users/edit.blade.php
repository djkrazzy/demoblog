@extends('adminlte::page')

@section('title', 'Eduapp')

@section('content_header')
    <h1>Asignar un roll</h1>
@stop

@section('content')
@if( session('info') )
    <div class="alert alert-success">
    	<strong>{{session('info') }}</strong>
    </div>
@endif
<div class="body">
	<div class="card-body">
		<p class="h3">Nombre:</p>
		<p class="form-control">{{$user->name}}</p>
		{!! Form::model ($user,['route'=> ['admin.users.update', $user ], 'method'=>'put' ])   !!}
		<h3>Listado de roles</h3>
          @foreach($roles as $role)
          <div>
          	<label for="">

          		{!! Form::checkbox( 'roles[]', $role->id, null, ['class'=>'mr-1']   )  !!}
          		{{$role->name}}
          	</label>
          </div>

          @endforeach
              {!! Form::submit('asignar rol',['class'=>'btn btn-primary mt-2'])  !!}
		{!! Form::close()  !!}
	</div>
</div>
@stop

@section('css')
  
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop