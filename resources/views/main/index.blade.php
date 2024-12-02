@extends('app')
@section('title','Main')
@section('content')
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            margin-bottom: 30px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .container h3 {
            margin-bottom: 10px;
            font-size: 25px;
            font-weight: bold;
        }
        .container p {
            margin-bottom: 10px;
        }
        .button {
            background-color: rgb(176, 190, 149);
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 200px;
        }
        .button:hover {
            background-color: #a6bb68;
        }
        a:visited {
            color: white;
            text-decoration: none;
        }
    </style>

    <div class="container">
        <p>Jei norite prisijungti prie paskyros spauskite</p>
        <a href="{{ route('login') }}" class="button">Prisijungti</a>

        <p class="mt-4">Jei norite sukurti paskyrą spauskite</p>
        <a href="{{ route('register') }}" class="button">Sukurti paskyrą</a>
        <br>
        <br>
        <hr>
        <p class="mt-4">
            Turėdami vartotojo paskyrą galėsite prisiregistruoti prie konferencijų.
            <br>
            <br>
            Turėdami darbuotojo paskyrą, galėsite peržiūrėti konferencijas ir jų narius.
            <br>
            <br>
            Turėdami administratoriaus paskyrą galėsite kurti, šalinti, redaguoti konferencijas, valdyti narius.
        </p>
    </div>
{{--    @if (auth()->check())
        <p>User: {{auth()->user()->name}}</p>
    @endif--}}
@endsection
