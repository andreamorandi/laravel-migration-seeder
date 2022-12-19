@extends('layouts.app')

@section('title', 'All trains')

@section('content')
    <div class="container">
        <h1>Today's trains</h1>
        <ul>
            @foreach ($trains as $train)
                <li>ID treno: {{ $train->id }}</li>
                <ul>
                    <li>Azienda: {{ $train->company }}</li>
                    <li>Stazione di partenza: {{ $train->departure_station }}</li>
                    <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
                    <li>Data di partenza: {{ $train->departure_date }}</li>
                    <li>Orario di partenza: {{ $train->departure_time }}</li>
                    <li>Data di arrivo: {{ $train->arrival_date }}</li>
                    <li>Orario di arrivo: {{ $train->arrival_time }}</li>
                    <li>Codice treno: {{ $train->train_code }}</li>
                    <li>Numero di carrozze: {{ $train->carriages_number }}</li>
                    <li>In orario: @if ($train->on_time)
                            Sì
                        @else
                            No
                        @endif
                    </li>
                    <li>Cancellato: @if ($train->canceled)
                            Sì
                        @else
                            No
                        @endif
                    </li>
                </ul>
            @endforeach
        </ul>
    </div>
@endsection
