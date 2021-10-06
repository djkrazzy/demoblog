<div class="card">
    {{$search}}
    <div class="card-header">
        <input wire:model='search' type="text" class="form-control" placeholder="Ingrese el nombre de un post..">
    </div>
    @if($posts->count())
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
              @foreach($posts as $post)
               <tr>
                   <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a> </td>
                    <td> <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger  btn-sm" type="submit">Eliminar</button>
                    </form> </td>
               </tr>
             @endforeach
           </tbody>
       </table>
   </div>

   <div class="card-footer">
       {{$posts->links()}}
   </div>
   @else
   <div class="card alert alert-info">
       <strong>No hay registros de post</strong>
   </div>
   
   @endif
</div>


