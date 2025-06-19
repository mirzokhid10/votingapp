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
                    <p class="text-xs mt-4"> @auth
                            Let us know what you would like and we'll take a look over!
                        @else
                            Please login to create an idea.
                        @endauth
                    </p>
                </div>
                <form action="#" method="POST" class="space-y-4 px-4 py-6">
                    <div class="">
                        <input type="text"
                            class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2 mb-3"
                            placeholder="Your Idea">
                        <div class="">
                            <select name="category_add" id="category_add"
                                class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                                <option value="Category One">Category One</option>
                                <option value="Category Two">Category Two</option>
                                <option value="Category Three">Category Three</option>
                                <option value="Category Four">Category Four</option>
                            </select>
                        </div>
                        <div class="">
                            <textarea name="idea" id="idea" cols="30" rows="4"
                                class="w-full bg-gray-100 rounded-xl border-none placeholer-gray-900 text-sm px-4 py-2 my-3"
                                placeholder="Describe your idea"></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="sumbit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                                font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                transition duration-150 ease-in px-6 py-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="text-gray-900 w-4 transform -rotate-45">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                </svg>

                                <span class="ml-1"> Attach</span>
                            </button>
                            <button type="sumbit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue
                                font-semibold rounded-xl border border-blue hover:bg-blue-hover
                                transition duration-150 ease-in px-6 py-3 text-white">
                                <span class="ml-1"> Submit </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-175 mr-5">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold space-x-10">
                    <li class=""><a href="" class="border-b-4 pb-3 border-blue">
                            All Ideas For</a>
                    </li>
                    <li class=""><a href=""
                            class="text-gray-400 transition duration-150 ease-in
                            border-b-4 pb-3 hover:border-blue">
                            Considering</a>
                    </li>
                    <li class=""><a href=""
                            class="text-gray-400 transition duration-150 ease-in
                            border-b-4 pb-3 hover:border-blue">
                            In Progress (1)</a>
                    </li>
                </ul>

                <ul class="flex uppercase font-semibold space-x-10">
                    <li class=""><a href=""
                            class="text-gray-400 transition duration-150 ease-in
                            border-b-4 pb-3 hover:border-blue">
                            Considering</a>
                    </li>
                    <li class=""><a href=""
                            class="text-gray-400 transition duration-150 ease-in
                            border-b-4 pb-3 hover:border-blue">
                            Closed (55)</a>
                    </li>
                </ul>
            </nav>

            <div class="mt-8">{{ $slot }}</div>
        </div>
        {{-- <div class="w-24">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam natus provident quae quos distinctio cum
            dolorum commodi, officia libero laborum voluptatum nulla perferendis voluptate recusandae, animi soluta
            repudiandae maxime consequatur odit! Tempore dolorem voluptates dolore, architecto dolores aut enim placeat.
        </div> --}}
    </main>
</body>

</html>
