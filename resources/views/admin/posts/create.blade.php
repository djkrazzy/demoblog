@extends('adminlte::page')

@section('title', 'Eduapp')

@section('content_header')
    <h1>Crear post</h1>
@stop

@section('content')
  <div class="card">

      <div class="card-body">
        {!! Form::open(['route'=>'admin.posts.store', 'autocomplete'=>'off']) !!}
        {!! Form::hidden('user_id',auth()->user()->id ) !!}
           <div class="form-group">  
           {!! Form::label('name','Nombre') !!}
           {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del post']) !!}
           @error('name')
                  <span class="text-danger">{{$message}}</span>
           @enderror
              <div> 
           <div class="form-group">  
           {!! Form::label('slug','Slug') !!}
           {!! Form::text('slug',null,['class'=>'form-control','placeholder'=>'Ingrese el slug del post','readonly']) !!}
            @error('slug')
                  <span class="text-danger">{{$message}}</span>
           @enderror
              <div>  

            <div class="form-group">  
           {!! Form::label('category_id','Categoria') !!}
           {!! Form::select('category_id',$categories, null,['class'=>'form-control']) !!}
            @error('category_id')
                  <span class="text-danger">{{$message}}</span>
           @enderror
              <div> 

             <div class="form-group">  
               <p class="font-bold">Etiquetas</p>
               @foreach($tags as $tag)

           {!! Form::checkbox('tags[]',$tag->id, null) !!}
             <label class="mr-2">{{$tag->name}}</label> 
               @endforeach
              
            @error('tags')
                  <span class="text-danger">{{$message}}</span>
           @enderror
              <div> 
               <div class="form-group"> 
                <p class="font-bold">Estado</p>
                <label >
                    {!! Form::radio('status',1,true) !!}
                    Borrador
                </label>

                  <label >
                    {!! Form::radio('status',2) !!}
                    Publicado
                </label>
                  @error('status')
                  <span class="text-danger">{{$message}}</span>
           @enderror
             </div>          
            <div class="form-group">  
                {!! Form::label('extract','Extracto') !!}
                {!! Form::textarea('extract',null, ['class'=>'form-control']) !!}
                 @error('extract')
                  <span class="text-danger">{{$message}}</span>
           @enderror
            </div>

             <div class="form-group">  
                {!! Form::label('body','Cuerpo del Post') !!}
                {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
                 @error('body')
                  <span class="text-danger">{{$message}}</span>
           @enderror
            </div>
             
            {!! Form::submit('Crear Post',['class'=>'btn btn-primary']) !!} 

        {!! Form::close() !!}
      </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script> 
        $(document).ready( function() {
       $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
        });

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
       });


</script>
@endsection