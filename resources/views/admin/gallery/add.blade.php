@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Agregar Imagen a la Galería</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('Galery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Imagen</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="status">
                            <label class="form-check-label" for="exampleCheck1">🗸 "visible"</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
