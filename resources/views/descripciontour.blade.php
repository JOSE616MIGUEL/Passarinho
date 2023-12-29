@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mb-3">
                @if ($tourdetails->image)
                <img src="{{ asset($tourdetails->image) }}"  class="card-img-top" alt="..." width="500px" height="100%">
            @else
                <h5>No hay imágenes</h5>
            @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $tourdetails->name }}</h5>
                    <p class="card-text">{{ $tourdetails->description }}</p>
                    <p class="card-text"><small class="text-body-secondary">{{ $tourdetails->updated_at }}</small></p>
                    <p class="card-text">{{ $tourdetails->itinerary }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
