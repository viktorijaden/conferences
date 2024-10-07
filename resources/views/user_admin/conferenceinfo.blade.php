    @extends('app')
    @section('title', 'client')
    @section('content')
        <style>
            body {
                padding-top: 125px;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
            button {
                background-color: rgb(176, 190, 149);
                color: white;
                border: none;
                cursor: pointer;
            }
            button:hover {
                background-color: #a6bb68;
            }
            /*.conference-list {
                margin-top: 40px;
            }*/
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
        </style>

        <div class="container">
            <h2>Pridėti naują konferenciją</h2>
            <form id="conference-form">
                <label for="name">Pavadinimas:</label>
                <input type="text" id="name" name="conference_name" placeholder="Įveskite pavadinimą" required>

                <label for="date">Data:</label>
                <input type="text" id="date" class="datepicker" name="conference_date" placeholder="Pasirinkite datą" required>

                <label for="location">Lokacija:</label>
                <input type="text" id="location" name="conference_location" placeholder="Įveskite lokaciją" required>

                <button type="submit">Pridėti konferenciją</button>
            </form>
        </div>
        <br></br>
        <div class="container" id="conference-list">
            <h2>Pridėtos konferencijos</h2>
        </div>

        <script>
            const form = document.getElementById('conference-form');
            const conferenceList = document.getElementById('conference-list');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const name = document.getElementById('name').value;
                const date = document.getElementById('date').value;
                const location = document.getElementById('location').value;

                const conferenceDiv = document.createElement('div');
                conferenceDiv.classList.add('conference-item');

                conferenceDiv.innerHTML = `
                <h3>${name}</h3>
                <p><strong>Data:</strong> ${date}</p>
                <p><strong>Lokacija:</strong> ${location}</p>
                <button>Keisti</button>
                <button>Trinti</button>
            `;

                conferenceList.appendChild(conferenceDiv);

                form.reset();
            });

            document.addEventListener('DOMContentLoaded', function() {
                const datepicker = new Datepicker(document.querySelector('.datepicker'), {
                    format: 'yyyy-mm-dd'
                });
            });
        </script>
    @endsection
