<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Load styles.css --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

 
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <nav class="bg-orange-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">

            <div class="flex space-x-4">
                <a href="{{ route('dashboard') }}" class="text-black hover:text-gray-200">Dashboard</a>
                <a href="{{ route('barang.index') }}" class="text-black hover:text-gray-200">Barang</a>

                @auth
                    <a href="{{ route('logout') }}" class="text-black hover:text-gray-200"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-black hover:text-gray-200">Login</a>
                    <a href="{{ route('register') }}" class="text-black hover:text-gray-200">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
        @yield('content')
    </div>

</body>
</html>
