@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Venta</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0" id="example">
                    
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check font-size-16 align-middle">
                                            <a href="{{ route('Sale.create') }}" class="btn btn-danger">Crear Venta</a>
                                        </div>
                                    </th>
                                    <th class="align-middle">Tours</th>
                                    <th class="align-middle">Usuario Comprador</th>
                                    <th class="align-middle">Cant. Clientes</th>
                                    <th class="align-middle">Precio Total</th>
                                    <th class="align-middle">Gestión</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contandor = 1;
                                ?>
                                @forelse ($sale as $item)
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <?php echo $contandor; ?>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $item->tours->name }}
                                        </td>

                                        <td>{{ $item->users->name }}
                                        </td>
                                        <td>{{ $item->cant_cliente }}</td>
                                        <td>  {{ $item->price_total }}</td>
                                     
                                        <td>
                                            <a href="{{ route('Sale.edit', $item->id) }}"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">Actualizar</a>
                                            <a href="{{ route('Sale.show', $item->id) }}"
                                                class="btn btn-danger btn-sm btn-rounded waves-effect waves-light">Eliminar</a>
                                                <a href="{{ route('Sale.print', $item->id) }}"  target="_blank"
                                                    class="btn btn-danger btn-sm btn-rounded waves-effect waves-light">
                                                <img src="{{asset('icon/pdf.png')}}" alt="" width="25px" height="25px">
                                                </a>
                                        </td>
                                    </tr>
                                    <?php
                                    $contandor++;
                                    ?>
                                @empty
                                    <!--
                                        <tr>
                                            <div>
                                                <h1>No hay productos</h1>
                                            </div>
                                        </tr>

                                -->
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
