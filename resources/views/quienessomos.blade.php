@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Quienes Somos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Es una empresa joven para personas de espíritu libre y adultos de espíritu joven en

                    donde se respete la libertad de aquellos que eligen las cosas diferentes , nuevas
                    
                    brisas;
                    
                    Buscamos integrar a La Juventud LGTBQ + , mochileros, jóvenes adultos, todo
                    
                    aquel joven aventurero que busca conocer las luces de la ciudad y
                    
                    Paisajes inolvidables que solo podrás conocer junto a nosotros
                    
                    En Passarinho hemos entendido que nuestro fuerte y ventaja competitiva es y
                    
                    siempre será nuestra gente. Nuestro espíritu de equipo nos une. Trabajamos para
                    
                    cumplir nuestra meta común de traspasar experiencias. Cooperamos, colaboramos
                    
                    y ayudamos al otro para crear un lugar de trabajo participativo y motivador.
                    
                    La satisfacción de nuestros clientes es esencial para el éxito de Passarinho.
                    
                    Obtenemos su satisfacción cuando escuchamos, entendemos y anticipamos sus
                    
                    necesidades y logramos cumplir sus expectativas.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
