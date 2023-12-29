@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Eliminar Tour</h4>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ¿Estás seguro de eliminar este registro?
                    </div>
                    <form action="{{ route('Tour.destroy', $tour->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Código</label>
                            <input type="text" class="form-control" name="code" value="{{ $tour->code }}" disabled>
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $tour->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Imagen</label>
                            @if ($tour->image)
                                <img src="{{ asset($tour->image) }}" alt="" width="100px" height="100px">
                                <br>
                            @else
                                <h5>No hay imágenes</h5>
                                <br>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="price" value="{{ $tour->price }}" disabled>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="status" disabled>
                            <label class="form-check-label" for="exampleCheck1">🗸 "visible"</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Itinerario</label>
                            <textarea cols="30" rows="10" class="form-control" name="itinerary" disabled>{{ $tour->itinerary }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Descripción general</label>
                            <textarea cols="30" rows="10" class="form-control" name="description" disabled>{{ $tour->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
