<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - TaskFlux</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <main>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Why Choose <span
                        class="mylogo">TaskFlux</span></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-3xl mb-4">📝</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Task Creation</h3>
                        <p class="text-gray-600">Create tasks quickly with essential details, and stay organized with a
                            simple yet powerful interface.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-3xl mb-4">📄</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Task Overview</h3>
                        <p class="text-gray-600">View all tasks in one place. Filter and search to find what you need
                            with ease.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-3xl mb-4">🔄</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Task Updates</h3>
                        <p class="text-gray-600">Easily update tasks as your work progresses. Adjust priorities,
                            deadlines, and add notes.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-3xl mb-4">🗑️</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Task Deletion</h3>
                        <p class="text-gray-600">Quickly remove completed or outdated tasks to keep your task list clean
                            and organized.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Built by Developers for Developers</h2>
                    <p class="text-xl text-gray-600 mb-10">TaskFlux is designed by a team of developers who understand
                        the importance of simple yet powerful task management for both personal and professional use.
                    </p>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                        alt="Team collaboration" class="rounded-xl shadow-lg w-full">
                </div>
            </div>
        </section>
    </main>

    <x-footer />
</body>

</html>
