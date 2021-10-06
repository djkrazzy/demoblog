<div class="card">
    <div class="card-head">
        
        <input wire:model="search"  class="form-control" placeholder="Ingrese el nombre o correo d eun usuario" >
    </div>
    @if($users->count() )
    <div class="card-body">
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a></td>
                            </tr>

                @endforeach
            </tbody>
        </table>
        {{$users->links()}}   
    </div>
     <div class="card">
                 
    </div>
    @else
    <div class="card-body">
        <strong>NO hay registros</strong>
    </div>
    @endif
</div>
