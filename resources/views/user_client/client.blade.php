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

<div class="conference">
    <h3>pirma konferencija</h3>
    <p><strong>Data:</strong> 2024 m. Spalio 10 - 15 d.</p>
    <p><strong>Laikas:</strong> 10:00 - 15:00</p>
    <p><strong>Vieta:</strong> Vyks nuotoliniu būdu</p>
    <button class="submit">Registruotis</button>
    <button><a href="{{ route('show') }}">Peržiūrėti</a></button>
</div>

<div class="conference">
    <h3>antra konferencija</h3>
    <p><strong>Data:</strong> 2024 m. Spalio 12 d.</p>
    <p><strong>Laikas:</strong> 09:00 - 17:00</p>
    <p><strong>Vieta:</strong> Vilnius, VVK</p>
    <button>Registruotis</button>
    <button><a href="{{ route('conferencecontent') }}">Peržiūrėti</a></button>
</div>

<div class="conference">
    <h3>trečia konferencija</h3>
    <p><strong>Data:</strong> 2024 m. Spalio 20 d.</p>
    <p><strong>Laikas:</strong> 12:00 - 16:00</p>
    <p><strong>Vieta:</strong> Vyks nuotoliniu būdu</p>
    <button>Registruotis</button>
    <button><a href="{{ route('conferencecontent') }}">Peržiūrėti</a></button>
</div>

@endsection
