@extends('adminlte::page')

@section('title', 'Eduapp')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @livewire('admin.user-index')
@stop

@section('css')
  
@stop

@section('js')
    @livewireScripts
@stop