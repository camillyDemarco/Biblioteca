<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Biblioteca') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="bg-white shadow-md py-4">
            <div class="container mx-auto flex justify-between">
                <a href="/" class="text-xl font-bold">Bibliotrca</a>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-600">Login</a></li>
                    
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>