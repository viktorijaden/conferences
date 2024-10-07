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
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
        }
        .conference-item button:hover {
            background-color: #a6bb68;
        }
        a:visited{
            color: white;
        }
    </style>

    <div class="container">
        <form id="conference-form">
            <button><a href="{{ route('userinfo') }}">Vartotojų duomenų tvarkymas</a></button>
            <button><a href="{{ route('conferenceinfo') }}">Konferencijų valdymas</a></button>
        </form>
    </div>

@endsection
