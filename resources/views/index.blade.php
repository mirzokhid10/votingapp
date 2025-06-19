<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-fully rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-fully rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none
                placeholder:text-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </div>
        </div>
    </div>
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500"></div>
                </div>
                <div class="mt-8">
                    <button
                        class="button w-20 bg-gray-200 border border-gray-200 hover:border-gray-400
                        font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                        Vote
                    </button>

                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione pariatur ad enim vero expedita
                        amet architecto praesentium nobis nihil, quaerat odio quia, illum aliquid culpa sapiente
                        repellat tempora, soluta cupiditate.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&middot;</div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                </svg>
                                <ul
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl
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
    </div>
</x-app-layout>
