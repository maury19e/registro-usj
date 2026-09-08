<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gestión de Animales - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-50">

    <div class="min-h-screen flex flex-col">

        <!-- Navbar -->
        <nav class="bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

                <div class="flex items-center gap-3">

                    <div>
                        <h1 class="text-2xl font-bold text-slate-900">
                            Gestión de Animales
                        </h1>

                        <p class="text-sm text-slate-500">
                            Sistema de registro y administración de animales
                        </p>
                    </div>

                </div>

            </div>
        </nav>

        <!-- Contenido -->
        <main class="flex-1">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

                @yield('content')

            </div>

        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-slate-200 mt-12">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

                <p class="text-sm font-semibold text-slate-900">
                    Gestión de Animales © 2026
                </p>

                <p class="text-xs text-slate-500">
                    Desarrollo Backend I
                </p>

            </div>

        </footer>

    </div>

</body>

</html>