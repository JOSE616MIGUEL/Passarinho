@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Eliminar Venta</h4>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ¿Estás seguro de eliminar este registro?
                    </div>
                    <form action="{{ route('Sale.destroy', $sale->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Precio Total</label>
                            <input type="text" class="form-control" name="name" value="{{ $sale->price_total }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre comprador</label>
                            <input type="text" class="form-control" name="name" value="{{ $sale->users->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tours </label>
                            <input type="text" class="form-control" name="name" value="{{ $sale->tours->name }}" disabled>
                        </div>
                    
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
