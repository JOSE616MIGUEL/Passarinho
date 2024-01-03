@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Actualizar Contacto</h4>
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $mensaje }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('Contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $contact->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $contact->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Fono</label>
                            <input type="text" class="form-control" name="fono" value="{{ $contact->fono }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cantidad de clientes adulto</label>
                            <input type="text" class="form-control" name="cant_client" value="{{ $contact->cant_client }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cantidad de clientes menores de edad</label>
                            <input type="text" class="form-control" name="cant_children" value="{{ $contact->cant_children }}">
                        </div> 
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mensaje</label>
                            <textarea cols="30" rows="10" class="form-control" name="message">{{ $contact->message }}</textarea>
                        </div>                 
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
