
@extends('layouts.app')

@section('content')

<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Configuración del perfil</h4>
            <p class="card-description">
                Edite su perfil, debe ingresar la contraseña para realizar cualquier tipo de actualización, esto es para
                que pueda recordar su contraseña
            </p>
            @if ($mensaje = Session::get('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ $mensaje }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form class="forms-sample" action="{{ route('ClienteConfiguration.update', $user->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputUsername1">Imagen</label>
                    <input type="file" class="form-control" name="image">
                    <br>
                    @if ($user->image)
                        <img src="{{ asset($user->image) }}" class="rounded" width="100px" height="100px">
                        <br>
                    @else
                        <h5>No hay imagen</h5>
                        <br>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
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
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Correo</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
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
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Contraseña Nueva</label>
                    <input type="password" class="form-control" name="password" value="">
                    @error('password')
                        <small>
                            <strong>
                                <div class="alert alert-danger" role="alert">
                                    Campo contraseña vacío o la contraseña tiene menos de 8 carácteres
                                </div>
                            </strong>
                        </small>
                    @enderror
                    <br>
                </div>
                <button type="submit" class="btn btn-outline-dark btn-lg">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
