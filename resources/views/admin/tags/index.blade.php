@extends('adminlte::page')

@section('title', 'Eduapp')

@section('content_header')
<a href="{{route('admin.tags.create')}}" class="btn btn-sm btn-secondary float-right">Nueva etiqueta</a>
    <h1>Listar etiqueta</h1>
@stop

@section('content')
@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>

@endif
  <div class="cadr">

  	<div class="card-body">
  		<table class="table table-striped">
  			<thead>
  				<tr>
  					<th>ID</th>
  					<th>Nombre</th>
  					<th colspan="2"></th>
  				</tr>
  			</thead>
  			<tbody>
  				@foreach($tags as $tag)
  				<tr>
  					<td>{{$tag->id}}</td>
  					<td>{{$tag->name}}</td>
  					<td width="10px"> <a href="{{route('admin.tags.edit',$tag)}}" class="btn btn-sm btn-primary">Editar</a> </td>
  					<td width="10px"><form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
  						@csrf
  						@method('delete')
  						<button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
  					</form> </td>
  				</tr>
  				@endforeach
  			</tbody>
  		</table>
  	</div>
  	
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop