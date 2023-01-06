<nav class="bg-gray-800">
    <div class="container mx-auto px-4 py-2 flex items-center justify-between">
        <div class="w-1/4">
            <a class="text-gray-400 hover:text-white font-bold px-4" href="{{ route('index') }}">
                CarRent
            </a>
        </div>
        <div class="w-3/4 flex items-center justify-end">
            @auth
                <a href="{{ route('cars') }}" class="text-gray-400 hover:text-white font-bold px-4">Cars</a>
                <a href="{{ route('rentals') }}" class="text-gray-400 hover:text-white font-bold px-4">Rentals</a>
                <a href="#" class="text-gray-400 hover:text-white font-bold px-4">Locations</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-gray-400 hover:text-white font-bold px-4" type="submit">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="text-gray-400 hover:text-white font-bold px-4">Login</a>
           @endguest
        </div>
    </div>
</nav>
