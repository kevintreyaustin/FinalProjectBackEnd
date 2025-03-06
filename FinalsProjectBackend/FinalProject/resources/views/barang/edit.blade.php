@extends('layouts.app')

@section('content')
    <h2>Edit Profil</h2>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
