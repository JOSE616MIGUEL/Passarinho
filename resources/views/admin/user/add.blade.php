@extends ('layouts.admin')


@section('content')
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Agregar Usuario</h4>
            
            @if ($mensaje = Session::get('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ $mensaje }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form class="forms-sample" action="{{ route('User.store') }}" method="post" enctype="multipart/form-data">
                @csrf
      
                <div class="form-group">
                    <label for="exampleInputUsername1">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                @error('name')
                    <small>
                        <strong>
                            <div class="alert alert-danger" role="alert">
                                Campo nombre vacío
                            </div>
                        </strong>
                    </small>
                @enderror
                <br>
                <div class="form-group">
                    <label for="exampleInputUsername1">Imagen</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                    <small>
                        <strong>
                            <div class="alert alert-danger" role="alert">
                                Campo imagen vacío
                            </div>
                        </strong>
                    </small>
                @enderror
                <br>
                <div class="form-group">
                    <label for="exampleInputUsername1">Correo</label>
                    <input type="email" class="form-control" name="email">
                </div>
                @error('email')
                    <small>
                        <strong>
                            <div class="alert alert-danger" role="alert">
                                Campo correo vacío
                            </div>
                        </strong>
                    </small>
                @enderror
                <br>
                <div class="form-group">
                    <label for="exampleInputUsername1">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                @error('password')
                    <small>
                        <strong>
                            <div class="alert alert-danger" role="alert">
                                Campo contraseña vacío
                            </div>
                        </strong>
                    </small>
                @enderror
                <br>
                <div class="form-group">
                    <label for="exampleInputUsername1">Rol</label>
                    <select name="role_as" class="form-control">
                        <option value="0">Cliente</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
                @error('role_as')
                    <small>
                        <strong>
                            <div class="alert alert-danger" role="alert">
                                Campo vacío
                            </div>
                        </strong>
                    </small>
                @enderror
                <br>
                <button type="submit" class="btn btn-outline-dark btn-lg">Agregar</button>
                <a href="{{ route('Dashboard.index') }}" class="btn btn-outline-primary btn-lg">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection
