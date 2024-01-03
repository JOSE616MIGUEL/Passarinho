@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Agregar Contacto</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('Contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Correo</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="fono">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">cantidad de clientes adulto</label>
                            <input type="number" class="form-control" name="cant_client">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">cantidad de clientes niños</label>
                            <input type="number" class="form-control" name="cant_children">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mensaje</label>
                            <textarea cols="30" rows="10" class="form-control" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
