@extends('layouts.app')

@section('title', 'Trains')

@section('content')
    <h3 class="text-center">Lista Treni in partenza oggi:</h3>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->Agency }}, Partenza: {{ $train->departure_station }} alle {{ $train->departure_time }} in data
                {{ $train->departure_date }}</li>
        @endforeach
    </ul>
@endsection
