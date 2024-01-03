@extends ('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Contacto</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <?php
                    $contandor = 1;
                    ?>
                    @forelse ($contact as $item)
                        <div class="card" style="width: 18rem;">
                            <?php echo $contandor; ?>
                            <div class="card-body">
                                <h5 class="card-title">Nombre: {{ $item->name }}</h5>
                                <h6 class="card-text">Correo: {{ $item->email }}</h6>
                                <h6 class="card-text">Número de teléfono: {{ $item->fono }}</h6>
                                <h6 class="card-text">Cantidad de cliente adulto: {{ $item->cant_client }}</h6>
                                <h6 class="card-text">Cantidad de cliente menor de edad: {{ $item->cant_children }}</h6>
                                <p class="card-text"> {{ $item->message }}</p>
                                <a href="{{ route('Contact.edit', $item->id) }}"
                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">Actualizar</a>
                                <a href="{{ route('Contact.show', $item->id) }}"
                                    class="btn btn-danger btn-sm btn-rounded waves-effect waves-light">Eliminar</a>
                            </div>
                        </div>
                        <?php
                        $contandor++;
                        ?>
                    @empty
                                <div>
                                    <h1>No hay contactos</h1>
                                </div>
                                
                    @endforelse
                  
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
