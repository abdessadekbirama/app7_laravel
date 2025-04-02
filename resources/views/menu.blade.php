<div class="flex items-center justify-between px-4 py-2 bg-violet-400">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
    </div>
    <nav class="navlinks">
        <ul class="flex items-center space-x-4">
            <li>
                <a class="text-white hover:text-gray-300" href="{{ url('/home') }}">Home</a>
            </li>
            <li>
                <a class="text-white hover:text-gray-300" href="{{ url('/about') }}">About</a>
            </li>
            <li>
                <a class="text-white hover:text-gray-300" href="{{ url('/contact') }}">Contact</a>
            </li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>
</div>