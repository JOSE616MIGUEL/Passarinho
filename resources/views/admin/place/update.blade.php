@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Actualizar Destino</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('Place.update', $place->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $place->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Imagen</label>
                            @if ($place->image)
                                <img src="{{ asset($place->image) }}" alt="" width="100px" height="100px">
                                <input type="file" class="form-control" name="image">
                                <br>
                            @else
                                <h5>No hay imágenes</h5>
                                <input type="file" class="form-control" name="image">
                                <br>
                            @endif
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="status" {{ $place->status == '1' ? 'checked' : '' }} />
                            <label class="form-check-label" for="exampleCheck1">🗸 "visible"</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
