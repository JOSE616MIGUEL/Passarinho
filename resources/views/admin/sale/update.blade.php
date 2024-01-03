@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Actualizar Venta</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('Sale.update', $sale->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Seleccionar el usuario comprador</label>
                            <select name="users_id" class="form-control">
                                <option value="{{ $sale->users_id }}">Usuario: {{ $sale->users->name }}</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Seleccionar el tour</label>
                            <select name="tours_id" class="form-control">
                                <option value="{{ $sale->tours_id }}">Tour: {{ $sale->tours->name }}</option>
                                @foreach ($tour as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }} ${{ $item->price }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Precio del Tour</label>
                            <input type="number" class="form-control" value="{{ $sale->tours->price }}" name="price_tour"
                                id="price_tour">
                            @error('price_tour')
                                <div class="alert alert-danger">
                                    <strong>Error no borre los datos</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Cantidad de Clientes</label>
                            <input type="number" class="form-control" value="{{ $sale->cant_cliente }}" name="cant_cliente" id="cantidad">
                            @error('price_tour')
                                <div class="alert alert-danger">
                                    <strong>Error no borre los datos</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <h3>Precio total de venta</h3>
                            <input type="number" class="form-control" name="price_total" id="total_price"
                                value="{{ $sale->price_total }}">
                        </div>
                        <a id='aumentar' onclick="aumentar()" class="btn btn-primary">+</a>
                        <a id='disminuir' onclick="disminuir()" class="btn btn-primary">-</a>
                        <a type="submit" class="btn btn-primary" onclick="total()">calcular</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
