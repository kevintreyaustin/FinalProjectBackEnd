@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white text-black p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Register</h2>

    @if(session('error'))
        <div class="bg-red-500 text-white p-2 rounded">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama</label>
            <input type="text" name="name" id="name" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" required class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full p-2 border rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Daftar</button>
    </form>
</div>
@endsection
