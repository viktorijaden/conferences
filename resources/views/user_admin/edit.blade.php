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
    </style>

    <div class="container">
        <h2>Koreguoti konferenciją</h2>
        <form id="conference-form" action="{{ route('conferences.update' , $conference->id) }}" method="POST">
            @csrf
            <label for="name">Naujas pavadinimas:</label>
            <input type="text" id="name" name="title" placeholder="Įveskite pavadinimą" required value="{{ $conference->title }}">

            <label for="about">Naujas aprašymas:</label>
            <input type="text" id="about" name="description" placeholder="Įveskite aprašymą" required value="{{ $conference->description }}">

            <label for="date">Data:</label>
            <input type="date" id="date" name="date_time" placeholder="Pasirinkite datą" required value="{{ $conference->date_time }}">

            <label for="location">Lokacija:</label>
            <input type="text" id="location" name="location" placeholder="Įveskite lokaciją" required value="{{ $conference->location }}">

            <button type="submit">Atnaujinti konferenciją</button>
        </form>
    </div>


@endsection