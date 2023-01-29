<nav class="bg-indigo-600">
    <div class="container mx-auto px-4 py-2 flex items-center justify-between">
        <div class="w-1/4 md:w-1/4">
            <a class="text-white hover:text-indigo-300 font-bold px-4" href="{{ route('index') }}">
                CarRent
            </a>
        </div>
        <div class="w-3/4 md:w-3/4 flex items-center justify-end">
            @auth
                <a href="{{ route('cars') }}" class="text-white hover:text-indigo-300 font-bold px-4">Cars</a>
                <a href="{{ route('locations') }}" class="text-white hover:text-indigo-300 font-bold px-4">Locations</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-white hover:text-indigo-300 font-bold px-4" type="submit">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="text-white hover:text-indigo-300 font-bold px-4">Login</a>
           @endguest
        </div>
    </div>
</nav>
