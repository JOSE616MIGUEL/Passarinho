@extends ('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Galería</h4>
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
                                            NUM
                                        </div>
                                    </th>
                                    <th class="align-middle">ID</th>
                                    <th class="align-middle">Nombre</th>
                                    <th class="align-middle">Imagen</th>
                                    <th class="align-middle">Estado</th>
                                    <th class="align-middle">Gestión</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contandor = 1;
                                ?>
                                @forelse ($galery as $item)
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <?php echo $contandor; ?>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $item->code }}</a>
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @if ($item->image)
                                                <img src="{{ asset($item->image) }}" alt="" width="100px"
                                                    height="100px">
                                                <br>
                                            @else
                                                <h5>No hay imágenes</h5>
                                                <br>
                                            @endif
                                        </td>

                                        <td>
                                            <span class="badge badge-pill badge-soft-dark font-size-11">
                                                {{ $item->status == '0' ? 'No visible' : 'Visible' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('Galery.edit', $item->id) }}"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">Actualizar</a>
                                            <a href="{{ route('Galery.show', $item->id) }}"
                                                class="btn btn-danger btn-sm btn-rounded waves-effect waves-light">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $contandor++;
                                    ?>
                                @empty
                                    <!--
                                            <div>
                                                <h1>No hay productos</h1>
                                            </div>
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
