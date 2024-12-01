@extends('app')
@section('title','Main')
@section('content')

    <div class="container mt-5">
        <h1 class="mb-4">Conferences</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date & Time</th>
                <th>Location</th>
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
