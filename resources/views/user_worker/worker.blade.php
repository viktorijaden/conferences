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
        .conference p {
            margin: 5px 0;
        }
    </style>

    <div class="conference">
        <h3>Pirma konferencija</h3>
        <p><strong>Data:</strong> 2024 m. Spalio 10 - 15 d.</p>
        <p><strong>Laikas:</strong> 10:00 - 15:00</p>
        <p><strong>Vieta:</strong> Vyks nuotoliniu būdu</p>
        <p><strong>Aprašymas:</strong> pirma konferencija kuri vyks nuotoliniu būdu 2024 m. Spalio 10 - 15 d. 10:00 - 15:00.</p>
        <p><strong>Dalyviai:</strong> 3</p>
        <ul>
            <li>pirmas</li>
            <li>antras</li>
            <li>trecias</li>
        </ul>
    </div>

    <div class="conference">
        <h3>Antra konferencija</h3>
        <p><strong>Data:</strong> 2024 m. Spalio 12 d.</p>
        <p><strong>Laikas:</strong> 09:00 - 17:00</p>
        <p><strong>Vieta:</strong> Vilnius, VVK</p>
        <p><strong>Aprašymas:</strong> antra konferencija</p>
        <p><strong>Dalyviai:</strong> 2</p>
        <ul>
            <li>pirmas</li>
            <li>antras</li>
        </ul>
    </div>

    <div class="conference">
        <h3>Trečia konferencija</h3>
        <p><strong>Data:</strong> 2024 m. Spalio 20 d.</p>
        <p><strong>Laikas:</strong> 12:00 - 16:00</p>
        <p><strong>Vieta:</strong> Vyks nuotoliniu būdu</p>
        <p><strong>Aprašymas:</strong> trečia konferencija</p>
        <p><strong>Dalyviai:</strong> 0</p>
    </div>

@endsection
