    @extends('app')
    @section('title', 'admin')
    @section('content')
        <style>
            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 30px;
            }
            h2 {
                text-align: center;
                font-size: 30px;
                color: #333;
            }
            form {
                display: flex;
                flex-direction: column;
            }
            label {
                margin-bottom: 5px;
                font-weight: bold;
                color: #555;
            }
            input, select, button {
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }
            .edit {
                width: 560px;
                height: 45px;
                background-color: rgb(176, 190, 149);
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 4px;
                text-decoration: none;
                cursor: pointer;
                display: inline-block;
                text-align: center;
            }

            .edit:hover {
                background-color: #a6bb68;
            }
            button {
                background-color: rgb(176, 190, 149);
                color: white;
                border: none;
                cursor: pointer;
            }
            button:hover {
                background-color: #a6bb68;
            }
            .conference-item {
                background-color: #fff;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .conference-item h3 {
                margin: 0 0 10px;
                color: #333;
            }
            .conference-item p {
                margin: 5px 0;
                color: #555;
            }
            .conference-item button {
                background-color: rgb(176, 190, 149);
                border: none;
                color: white;
                padding: 10px 15px;
                border-radius: 4px;
            }
            .conference-item button:hover {
                background-color: #a6bb68;
            }
            a:visited{
                color: white;
                text-decoration: none;
            }
        </style>

        <div class="container">
            <h2>Pridėti naują konferenciją</h2>
            <form id="conference-form" action="{{ route('conferences.store') }}" method="POST">
                @csrf
                <label for="name">Pavadinimas:</label>
                <input type="text" id="name" name="title" placeholder="Įveskite pavadinimą" required>

                <label for="about">Apie:</label>
                <input type="text" id="about" name="description" placeholder="Įveskite pavadinimą" required>

                <label for="date">Data:</label>
                <input type="date" id="date" name="date_time" placeholder="Pasirinkite datą" required>

                <label for="location">Lokacija:</label>
                <input type="text" id="location" name="location" placeholder="Įveskite lokaciją" required>

                <button type="submit">Pridėti konferenciją</button>
            </form>
        </div>
        <br>
        <div class="container" id="conference-list">
            <h2>Pridėtos konferencijos</h2>
            @forelse($conferences as $conf)
                <hr>
                <div>
                    <h3>Pavadinimas: {{ $conf->title }}</h3>
                    <p><strong>Data: {{ $conf->date_time }}</strong></p>
                    <p><strong>Lokacija: {{ $conf->location }}</strong></p>
                    <p><strong>Apie: {{ $conf->description }}</strong></p>
                    <a href="{{ route('conferences.edit', $conf->id) }}" class="edit">Keisti</a>
                    <br>
                    <br>
                    <form action="{{ route('conferences.destroy', $conf->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete">Trinti</button>
                    </form>
                </div>
            @empty
                <p>Konferencijų nėra</p>
            @endforelse

        </div>

        <script>
            const form = document.getElementById('conference-form');
            const conferenceList = document.getElementById('conference-list');
        </script>
    @endsection
