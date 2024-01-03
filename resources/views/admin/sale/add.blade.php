@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Crear Venta</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('Sale.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="price_total">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Seleccionar el usuario comprador</label>
                            <select name="users_id" class="form-control">
                                <option value="">Usuario</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Seleccionar el tour</label>
                            <select name="tours_id" class="form-control">
                                <option value="">Tour</option>
                                @foreach ($tour as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }} ${{ $item->price }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
