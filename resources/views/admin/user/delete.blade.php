@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Eliminar Usuario</h4>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ¿Estás seguro de eliminar este registro?
                    </div>
                    <form action="{{ route('User.destroy', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Imagen</label>
                            <br>
                            @if ($user->image)
                                <img src="{{ asset($user->image) }}" alt="" width="100px" height="100px">
                                <br>
                            @else
                                <h5>No hay imagen</h5>
                                <br>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Correo</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Rol</label><br>
                            <p>Rol actual del usuario: {{ $user->role_as == '1' ? 'Administrador' : 'Cliente' }}</p>
                        </div>
                        <br>
                 
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
