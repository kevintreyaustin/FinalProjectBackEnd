<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-xl font-bold">Logo</a>
        <div>
            <a href="{{ route('dashboard') }}" class="text-white px-4">Dashboard</a>
            <a href="{{ route('barang.index') }}" class="text-white px-4">Barang</a>
            @guest
                <a href="{{ route('login') }}" class="text-white px-4">Login</a>
                <a href="{{ route('register') }}" class="text-white px-4">Register</a>
            @else
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white px-4">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</nav>
