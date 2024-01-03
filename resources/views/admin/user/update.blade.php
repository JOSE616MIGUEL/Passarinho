@extends ('layouts.admin')


@section('content')
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actualizar Usuario</h4>

                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ $mensaje }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="forms-sample" action="{{ route('User.update', $user->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
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
                        @if ($user->image)
                            <img src="{{ asset($user->image) }}" alt="" width="100px" height="100px">
                            <br>
                        @else
                            <h5>No hay imagen</h5>

                            <br>
                        @endif
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
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
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
                        <label for="exampleInputUsername1">Rol</label><br>
                        <select name="role_as" class="form-control">
                            <option value="{{ $user->role_as == '1' ? '1' : '0' }}">
                                <p>Rol actual del usuario: {{ $user->role_as == '1' ? 'Administrador' : 'Cliente' }}</p>
                            </option>
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
                    <button type="submit" class="btn btn-outline-dark btn-lg">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
