@extends ('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Eliminar Contacto</h4>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        ¿Estás seguro de eliminar este registro?
                    </div>
                    <form action="{{ route('Contact.destroy', $contact->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ $contact->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $contact->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Fono</label>
                            <input type="text" class="form-control" name="fono" value="{{ $contact->fono }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cantidad de clientes adulto</label>
                            <input type="text" class="form-control" name="cant_client" value="{{ $contact->cant_client }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cantidad de clientes menores de edad</label>
                            <input type="text" class="form-control" name="cant_children" value="{{ $contact->cant_children }}" disabled>
                        </div> 
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mensaje</label>
                            <textarea cols="30" rows="10" class="form-control" name="message" disabled>{{ $contact->message }}</textarea>
                        </div>                 
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
