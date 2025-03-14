<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Meu Site Laravel')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-100">
        <nav class="bg-white shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <a href="/" class="flex items-center py-4">
                                <span class="font-semibold text-gray-500 text-lg">Meu Site</span>
                            </a>
                        </div>
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="/" class="py-4 px-2 {{ request()->is('/') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-gray-900' }}">Início</a>
                            <a href="/sobre" class="py-4 px-2 {{ request()->is('sobre') ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-gray-900' }}">Sobre Nós</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="bg-white shadow-lg mt-8">
            <div class="max-w-6xl mx-auto px-4 py-6">
                <p class="text-center text-gray-600">&copy; {{ date('Y') }} Meu Site Laravel. Todos os direitos reservados.</p>
            </div>
        </footer>
    </body>
</html> 