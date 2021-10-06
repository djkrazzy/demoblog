@extends('adminlte::page')

@section('title', 'Eduapp')

@section('content_header')
<a href="{{route('admin.posts.create')}}" class="btn btn-secondary float-right" >Agregar nuevo post</a>
    <h1>Listado de post</h1>
@stop

@section('content')
   @livewire('admin.post-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop