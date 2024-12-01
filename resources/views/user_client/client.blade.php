@extends('app')
@section('title', 'client')
@section('content')
    <style>
        .conference {
            max-width: 600px;
            margin: 0 auto;
            margin-bottom: 30px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .conference h3 {
            margin-bottom: 10px;
        }
        .conference button {
            background-color: rgb(176, 190, 149);
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .conference button:hover {
            background-color: #a6bb68;
        }
        a:visited {
            color: white;
            text-decoration: none;
        }
    </style>
    <h2>Pridėtos konferencijos</h2>
    @forelse($conferences as $conf)
        <div class="conference">
            <h3>Pavadinimas: {{ $conf->title }}</h3>
            <p><strong>Data: {{ $conf->date_time }}</strong></p>
            <p><strong>Lokacija: {{ $conf->location }}</strong></p>
            <p><strong>Apie: {{ $conf->description }}</strong></p>
        </div>
    @empty
        <p>Konferencijų nėra</p>
    @endforelse

@endsection
