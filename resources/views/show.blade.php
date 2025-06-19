<x-app-layout>
    <x-slot name="title">
        Laracasts Voting
    </x-slot>
    <div>
        <a href="" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    {{-- Starts idea   container --}}
    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex px-4 py-6">
            <a href="" class="flex-none">
                <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione pariatur ad enim vero expedita
                    amet architecto praesentium nobis nihil, quaerat odio quia, illum aliquid culpa sapiente
                    repellat tempora, soluta cupiditate.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione pariatur ad enim vero expedita
                    amet architecto praesentium nobis nihil, quaerat odio quia, illum aliquid culpa sapiente
                    repellat tempora, soluta cupiditate
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-400">
                            John Doe
                        </div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-400">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase
                                leading-none text-center rounded-full w-28 h-7 py-2 px-4 cursor-pointer">
                            Open
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-150 ease-in py-1 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                            </svg>
                            <ul
                                class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl
                                py-3">
                                <li><a href="#"
                                        class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                        Mark as Spam</a>
                                </li>
                                <li><a href="#"
                                        class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                        Delete Post</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Ends idea container --}}

    {{-- Starts idea container --}}
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ">
            <button type="sumbit"
                class="flex items-center justify-center w-36 h-11 text-xs bg-blue
                font-semibold rounded-xl border border-blue hover:bg-blue-hover
                transition duration-150 ease-in px-6 py-3 text-white">
                <span class="ml-1"> Reply </span>
            </button>

            <button type="sumbit"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                transition duration-150 ease-in px-6 py-3">

                <span> Set Status </span>
                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>

        <div class="flex items-center space-x-3 ">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="sumbit"
                class="w-32 h-11 text-xs bg-gray-200
                font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400
                transition duration-150 ease-in px-6 py-3">

                <span> Vote </span>
            </button>
        </div>
    </div>
    {{-- Ends idea container --}}

    {{-- Starts comments container --}}
    <div class="comments-container relative space-y-6 ml-22 pt-4 my-8 mt-1">
        {{-- Starts comment container --}}
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex px-4 py-6">
                <a href="" class="flex-none">
                    <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-400">
                                John Doe
                            </div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-150 ease-in py-1 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                </svg>
                                <ul
                                    class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl
                                py-3">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam</a>
                                    </li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Ends comment container --}}

        {{-- Starts comment container --}}
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex px-4 py-6">
                <a href="" class="flex-none">
                    <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    <div class="text-center uppercase text-blue text-xxs fond-bold mt-1">Admin</div>
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status Changed to "Under Construction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">
                                Andrew John
                            </div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-150 ease-in py-1 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                </svg>
                                <ul
                                    class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl
                                py-3">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam</a>
                                    </li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Ends comment container --}}

        {{-- Starts comment container --}}
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex px-4 py-6">
                <a href="" class="flex-none">
                    <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="w-14 h-14 rounded-xl">

                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status Changed to "Under Construction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">
                                Andrew John
                            </div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7
                                transition duration-150 ease-in py-1 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                </svg>
                                <ul
                                    class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl
                                py-3">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Mark as Spam</a>
                                    </li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                            Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Ends comment container --}}
    </div>
    {{-- Ends comment container --}}

</x-app-layout>
