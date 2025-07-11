<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:wght@400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <livewire:styles />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="/"><img src="{{ asset('img/logoinwhite.svg') }}" alt="logo"></a>
        <div class="flex items-center mt-2 md:mt-0">
            @if (Route::has('login'))
                <nav class="px-6 py-4">
                    @auth
                        <div class="flex items-center space-x-4">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
            <a href="#">
                <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex flex-col md:flex-row" style="max-width:1000px">
        <div class="w-70 mx-auto md:mx-0 md:mr-5">
            <div class="bg-white md:sticky md:top-8 border-2 border-blue rounded-xl mt-16"
                style="
                          border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;
                    ">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an Idea</h3>
                    <p class="text-xs mt-4">
                        @auth
                            Let us know what you would like and we'll take a look over!
                        @else
                            Please login to create an idea.
                        @endauth
                    </p>
                </div>
                @auth
                    <livewire:creating-ideas />
                @else
                    <div class="my-6 text-center">

                        <a href="{{ route('login') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-blue
                                font-semibold rounded-xl border border-blue hover:bg-blue-hover
                                transition duration-150 ease-in px-6 py-3 text-white">
                            <span class="ml-1"> login </span>
                        </a>
                        <a href="{{ route('register') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200
                                font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                transition duration-150 ease-in px-6 py-3 mt-4">

                            <span class="ml-1"> Sign Up</span>
                        </a>
                    </div>
                @endauth
            </div>
        </div>
        <div class="w-full px-2 md:px-0 md:w-175">
            <livewire:status-filters />

            <div class="mt-8">{{ $slot }}</div>
        </div>
    </main>
    <livewire:scripts />
</body>

</html>
