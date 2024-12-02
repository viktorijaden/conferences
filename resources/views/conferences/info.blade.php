@extends('app')
@section('title','Main')
@section('content')

    <div class="container mt-5">
        <h1 class="mb-4">Konferencijos</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Pavadinimas</th>
                <th>Apibūdinimas</th>
                <th>Laikas</th>
                <th>Lokacija</th>
            </tr>
            </thead>
            <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->id }}</td>
                    <td>{{ $conference->title }}</td>
                    <td>{{ $conference->description }}</td>
                    <td>{{ $conference->date_time }}</td>
                    <td>{{ $conference->location }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
