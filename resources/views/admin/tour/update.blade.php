@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Actualizar Tour</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('Tour.update', $tour->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Código</label>
                            <input type="text" class="form-control" name="code" value="{{ $tour->code }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $tour->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Imagen</label>
                            @if ($tour->image)
                                <img src="{{ asset($tour->image) }}" alt="" width="100px" height="100px">
                                <br>
                            @else
                                <h5>No hay imágenes</h5>
                                <input type="file" class="form-control" name="image">
                                <br>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="price" value="{{ $tour->price }}">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="status" {{ $tour->status == '1' ? 'checked' : '' }} />
                            <label class="form-check-label" for="exampleCheck1">🗸 "visible"</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Itinerario</label>
                            <textarea cols="30" rows="10" class="form-control" name="itinerary">{{ $tour->itinerary }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Descripción general</label>
                            <textarea cols="30" rows="10" class="form-control" name="description">{{ $tour->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
