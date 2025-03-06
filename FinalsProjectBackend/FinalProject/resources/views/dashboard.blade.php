@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white text-black p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
    <p>Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</p>
</div>
@endsection
