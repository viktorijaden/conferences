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
        a {
            color: rgb(176, 190, 149);
            text-decoration: none;
        }
        a:visited {
            color: rgb(176, 190, 149);
            text-decoration: none;
        }
    </style>
    <div class="container">
        <h2>Prisijungimas</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">El. paštas</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Slaptažodis</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit">Prisijungti</button>
        </form>
        <br>
        <p>Neturite paskyros? <a href="{{ route('register') }}">Sukurti paskyrą</a></p>
    </div>
@endsection
