@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuestros Tours') }}</div>

                    @forelse ($tour as $item)
                        <div class="card mb-3">
                            <img src="{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text"><small class="text-body-secondary">{{ $item->updated_at }}</small></p>
                                <button class="btn btn-primary">Itinerario</button>
                            </div>
                        </div>
                    @empty
                    <div>
                        <h6>No hay tours</h6>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
