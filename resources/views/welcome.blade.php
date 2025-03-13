<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticketing</title>

    <!-- Fonts & Tailwind -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .hero {
            background: url('{{ asset('images/airport.jpeg') }}') center/cover no-repeat;
            height: 100vh;
        }
    </style>

</head>
<body class="antialiased bg-gray-100">
    <div class="relative w-full hero flex items-center justify-center text-center text-white">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Dark overlay -->

        <div class="z-10">
            <h1 class="text-5xl font-bold">Find Your Next Adventure</h1>
            <p class="text-lg mt-4">Compare and book flights with ease</p>

            <div class="mt-6 space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-6 py-3 rounded-lg shadow">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
