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
        button {
            background-color: rgb(176, 190, 149);
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 200px;
        }
        button:hover {
            background-color: #a6bb68;
        }
        a:visited {
            color: white;
            text-decoration: none;
        }
    </style>
    <div class="container">
        <h1>Registracija</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Vardas</label>
                <input type="text" class="form-control" id="name" name="name" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">El. paštas</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Slaptažodis</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Pakartokite slaptažodį</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <input type="checkbox" id="admin" name="admin" value="admin">
                <label for="admin"> Administratorius </label>
            </div>

            <button type="submit">Registruotis</button>
        </form>
    </div>
@endsection
