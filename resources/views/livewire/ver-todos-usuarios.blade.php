<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ver todos los usuarios</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre / Apellido</th>
                            <th>Email</th>
                            <th>Fecha de creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }} {{$user->apell}} </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <a wire:click="eliminarUsuario({{$user->id}})" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
