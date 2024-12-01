@extends('app')
@section('title','admin')
@section('content')

    <div class="container" id="conference-list">
        <h2>Vartotojai</h2>
        @forelse($users as $user)
            <div>
                <h3>ID: {{ $user->id }}</h3>
                <p><strong>Vardas: {{ $user->name }}</strong></p>
                <p><strong>El.paŠtas: {{ $user->email }}</strong></p>
                <p><strong>Administratirius: {{ $user->admin }}</strong></p>
                <form action="{{ route('userinfo.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Trinti</button>
                </form>
            </div>
        @empty
            <p>Vartotojų nėra</p>
        @endforelse

    </div>

@endsection
