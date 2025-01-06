@vite(['resources/js/navbar.js'])
<div>
    <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
        <a class="text-3xl font-bold leading-none" href="/">
            <img class="h-10"
                src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg"
                alt="">
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-gray-900 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul
            class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-base font-semibold text-gray-900 hover:text-blue-500" href="/index">Home</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-base text-gray-900 font-bold hover:text-blue-500" href="#">About Us</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-base text-gray-900 font-semibold hover:text-blue-500" href="#">Features</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-base text-gray-900 hover:text-blue-500 font-semibold" href="#">Pricing</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-base text-gray-900 hover:text-blue-500 font-semibold" href="#">Contact</a></li>
        </ul>
        <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 border-solid border-2 border-blue-500 hover:bg-gray-100 text-base text-gray-900 font-bold  rounded-full transition duration-200"
            href="/login">LogIn</a>
        <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-base border-solid border-2 border-blue-500 text-white font-bold rounded-full transition duration-200"
            href="/register">Sign up</a>
    </nav>
    <div class="navbar-menu relative z-50 hidden transition-all duration-300 ease-in-out">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img class="h-10"
                        src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg"
                        alt="">

                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block text-base p-4 font-semibold text-gray-900 hover:bg-gray-200 hover:text-blue-500 rounded-lg"
                            href="#">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block text-base p-4 font-semibold text-gray-900 hover:bg-gray-200 hover:text-blue-500 rounded-lg"
                            href="#">About Us</a>
                    </li>
                    <li class="mb-1">
                        <a class="block text-base p-4 font-semibold text-gray-900 hover:bg-gray-200 hover:text-blue-500 rounded-lg"
                            href="#">Features</a>
                    </li>
                    <li class="mb-1">
                        <a class="block text-base p-4 font-semibold text-gray-900 hover:bg-gray-200 hover:text-blue-500 rounded-lg"
                            href="#">Pricing</a>
                    </li>
                    <li class="mb-1">
                        <a class="block text-base p-4 font-semibold text-gray-900 hover:bg-gray-200 hover:text-blue-500 rounded-lg"
                            href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-3  text-base text-center font-semibold border-solid border-2 border-blue-500 hover:bg-gray-100 rounded-full"
                        href="/login">LogIn</a>
                    <a class="block px-4 py-3 mb-2 text-base text-center text-white font-semibold bg-blue-500 hover:bg-blue-600 rounded-full"
                        href="#">SignUp</a>
                </div>
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2024</span>
                </p>
            </div>
        </nav>
    </div>
</div>
