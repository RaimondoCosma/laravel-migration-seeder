@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('main-content')
    <section class="container">
        <h1 class="text-center">Lista Treni</h1>
        <ul class="list-unstyled">
            @foreach ($trains as $train)
                <li>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->agency }}</h5>
                            <h5 class="card-title"><strong>Codice treno</strong>: {{ $train->train_code }}</h5>
                            <div>
                                <span class="card-subtitle mb-2 text-muted"><strong>Partenza</strong>:
                                    {{ $train->departure_station }} --> <strong>Arrivo</strong>:
                                    <span class="card-subtitle mb-2 text-muted">{{ $train->arrival_station }}</span>
                            </div>
                            <div>
                                <span class="card-subtitle mb-2 text-muted"><strong>Ora di partenza</strong>:
                                    {{ $train->departure_time }} --> <strong>Ora di arrivo</strong>:
                                    <span class="card-subtitle mb-2 text-muted">{{ $train->arrival_time }}</span>
                            </div>
                            <div>
                                <span class="card-subtitle mb-2 text-muted"><strong>Data di partenza</strong>:
                                    {{ $train->departure_date }} --> <strong>Data di arrivo</strong>:
                                    <span class="card-subtitle mb-2 text-muted">{{ $train->arrival_date }}</span>
                            </div>
                            <h6><strong>Numero Carrozza: {{ $train->cabin_numbers }}</strong></h6>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
