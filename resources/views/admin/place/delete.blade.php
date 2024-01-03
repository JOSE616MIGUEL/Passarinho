@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Eliminar Destino</h4>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ¿Estás seguro de eliminar este registro?
                    </div>
                    <form action="{{ route('Place.destroy', $place->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
             
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $place->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Imagen</label>
                            @if ($place->image)
                                <img src="{{ asset($place->image) }}" alt="" width="100px" height="100px">
                                <br>
                            @else
                                <h5>No hay imágenes</h5>
                                <br>
                            @endif
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="status" {{ $place->status == '1' ? 'checked' : '' }} disabled />
                            <label class="form-check-label" for="exampleCheck1">🗸 "visible"</label>
                        </div>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
