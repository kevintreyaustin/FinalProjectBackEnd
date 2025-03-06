@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white text-black p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Login</h2>
    @if(session('error'))
        <div class="bg-red-500 text-white p-2 rounded mb-4">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" required class="w-full px-3 py-2 border rounded" value="{{ old('email') }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" required class="w-full px-3 py-2 border rounded">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Login</button>
    </form>
</div>
@endsection
