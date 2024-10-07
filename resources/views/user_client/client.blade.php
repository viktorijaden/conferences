@extends('app')
@section('title', 'client')
@section('content')
    <style>
        body {
            padding-top: 110px;
        }
        .conference {
            max-width: 600px;
            margin: 0 auto;
            margin-bottom: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .conference h3 {
            margin-bottom: 10px;
        }
        .conference button {
            background-color: rgb(176, 190, 149);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .conference button:hover {
            background-color: #a6bb68;
        }
        .details {
            display: none;
            margin-top: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
<div class="conference">
    <h3>pirma konferencija</h3>
    <p><strong>Data:</strong> 2024 m. Spalio 10 - 15 d.</p>
    <p><strong>Laikas:</strong> 10:00 - 15:00</p>
    <p><strong>Vieta:</strong> Vyks nuotoliniu būdu</p>
    <button>Registruotis</button>
    <button onclick="toggleDetails(this)">Peržiūrėti</button>
    <div class="details">
        <p>Pirma konferencija kuri vyks nuotoliniu būdu 2024 m. Spalio 10 - 15 d. 10:00 - 15:00.</p>
    </div>
</div>

<div class="conference">
    <h3>antra konferencija</h3>
    <p><strong>Data:</strong> 2024 m. Spalio 12 d.</p>
    <p><strong>Laikas:</strong> 09:00 - 17:00</p>
    <p><strong>Vieta:</strong> Vilnius, VVK</p>
    <button>Registruotis</button>
    <button onclick="toggleDetails(this)">Peržiūrėti</button>
    <div class="details">
        <p>antra konferencija</p>
    </div>
</div>

<div class="conference">
    <h3>trečia konferencija</h3>
    <p><strong>Data:</strong> 2024 m. Spalio 20 d.</p>
    <p><strong>Laikas:</strong> 12:00 - 16:00</p>
    <p><strong>Vieta:</strong> Vyks nuotoliniu būdu</p>
    <button>Registruotis</button>
    <button onclick="toggleDetails(this)">Peržiūrėti</button>
    <div class="details">
        <p>trečia konferencija</p>
    </div>
</div>

    <script>
        function toggleDetails(button) {
            const details = button.nextElementSibling;

            if (details.style.display === "none" || details.style.display === "") {
                details.style.display = "block";
            } else {
                details.style.display = "none";
            }
        }
    </script>

@endsection
