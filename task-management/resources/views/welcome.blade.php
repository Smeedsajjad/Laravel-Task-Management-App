<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>TaskFlow</title>
</head>

<body>
    <x-navbar />
    <main>
        <div
            class="w-full h-full flex flex-wrap lg:flex-nowrap items-center justify-center lg:justify-between p-8 lg:p-16">
            <!-- Left Content -->
            <div
                class="w-full lg:w-1/2 flex flex-col justify-center items-center lg:items-start text-center lg:text-left leading-5">
                <h1 class="font-bold text-3xl lg:text-5xl lg:w-4/5" style="line-height: 1.2;">
                    Organize Your Notes Easily with
                    <span class="text-gray-500">All-in-one Platform!</span>
                </h1>
                <p class="text-gray-600 font-semibold lg:w-4/5 mt-5">
                    Say goodbye to scattered notes and hello to organized productivity with our all-in-one platform.
                    Easily manage tasks, projects, and ideas in one place for efficient collaboration and streamlined
                    success.
                </p>
                <a class="py-2 px-6 bg-blue-500 hover:bg-blue-600 text-base border-2 border-blue-500 text-white font-bold rounded-full transition duration-200 mt-5"
                    href="#">
                    Get Started
                </a>
            </div>
            <!-- Right Content -->
            <div class="w-full lg:w-1/2 flex justify-center mt-8 lg:mt-0">
                <img src="{{ asset('images/h1.png') }}" alt="Organized Notes" class="w-full lg:w-4/5">
            </div>
        </div>

        <div id="inverse-rounded-edge" class="w-full bg-black h-full flex flex-col justify-start items-center">
            <div class="flex flex-col items-center text-center justify-center relative top-44">
                <h1 class="font-bold text-white text-3xl lg:text-5xl lg:w-4/5" style="line-height: 1.2;">
                    We can help manage your work more efficient
                </h1>
                <p class="text-gray-300 font-semibold lg:w-4/5 mt-5">
                    Many Features can help your work. keep update with new technology and friendly experience.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8 p-8 lg:p-16">
                <!-- Image Section -->
                <div class="w-full lg:w-1/2 flex justify-center">
                    <img src="{{ asset('images/h2.png') }}" alt="Platform Image" class="w-full max-w-sm lg:max-w-md">
                </div>

                <!-- Content Section -->
                <div class="w-full lg:w-1/2 space-y-8">
                    <!-- Single Feature Block -->
                    <div class="flex items-start gap-4">
                        <i class="text-blue-500 text-3xl">remix icons</i>
                        <div>
                            <h1 class="text-lg font-bold">Task Assignment</h1>
                            <p class="text-gray-600">Help you to know this platform more clearly and enjoy.</p>
                            <hr class="mt-2 border-gray-300">
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <i class="text-blue-500 text-3xl">remix icons</i>
                        <div>
                            <h1 class="text-lg font-bold">Task Assignment</h1>
                            <p class="text-gray-600">Help you to know this platform more clearly and enjoy.</p>
                            <hr class="mt-2 border-gray-300">
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <i class="text-blue-500 text-3xl">remix icons</i>
                        <div>
                            <h1 class="text-lg font-bold">Task Assignment</h1>
                            <p class="text-gray-600">Help you to know this platform more clearly and enjoy.</p>
                            <hr class="mt-2 border-gray-300">
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <i class="text-blue-500 text-3xl">remix icons</i>
                        <div>
                            <h1 class="text-lg font-bold">Task Assignment</h1>
                            <p class="text-gray-600">Help you to know this platform more clearly and enjoy.</p>
                            <hr class="mt-2 border-gray-300">
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <i class="text-blue-500 text-3xl">remix icons</i>
                        <div>
                            <h1 class="text-lg font-bold">Task Assignment</h1>
                            <p class="text-gray-600">Help you to know this platform more clearly and enjoy.</p>
                            <hr class="mt-2 border-gray-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
