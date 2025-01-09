<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Styles / Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard</title>
</head>

<body>
    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-gray-50 dark:bg-[#1F2937] rounded-lg shadow-lg">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b border-gray-200 dark:border-[#374151] rounded-t">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-[#F9FAFB]">
                        Create New Product
                    </h3>
                    <button type="button"
                        class="text-gray-500 hover:text-gray-800 dark:text-[#D1D5DB] dark:hover:text-[#F9FAFB] bg-transparent hover:bg-gray-200 dark:hover:bg-[#374151] rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-800 dark:text-[#E5E7EB]">Title</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-[#3B82F6] focus:border-[#3B82F6] block w-full p-2.5 dark:bg-[#111827] dark:border-[#374151] dark:placeholder-[#6B7280] dark:text-[#F9FAFB] dark:focus:ring-[#60A5FA] dark:focus:border-[#60A5FA]"
                                placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-800 dark:text-[#E5E7EB]">Description</label>
                            <textarea id="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-800 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#3B82F6] focus:border-[#3B82F6] dark:bg-[#111827] dark:border-[#374151] dark:placeholder-[#6B7280] dark:text-[#F9FAFB] dark:focus:ring-[#60A5FA] dark:focus:border-[#60A5FA]"
                                placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-[#3B82F6] hover:bg-[#2563EB] focus:ring-4 focus:outline-none focus:ring-[#60A5FA] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#2563EB] dark:hover:bg-[#1E40AF] dark:focus:ring-[#60A5FA]">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-screen bg-gray-900 bg-opacity-50">
        <div class="relative w-full max-w-md p-4 md:max-h-full">
            <!-- Modal Content -->
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-700">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-5 border-b dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Create New Product</h3>
                    <button type="button" class="text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2"
                        data-modal-toggle="edit-modal">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l6 6m0 0l6 6M7 7L1 13m6-6l6-6" />
                        </svg>
                    </button>
                </div>
                <!-- Modal Body -->
                <form class="p-5">
                    <div class="grid gap-4 mb-4 grid-cols-1">
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="name" name="name"
                                class="w-full p-2.5 text-sm rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white"
                                placeholder="Type product name" required>
                        </div>
                        <div>
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" rows="4"
                                class="w-full p-2.5 text-sm rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white"
                                placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="flex items-center px-5 py-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Add
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="popup-modal" tabindex="-1"
        class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-screen bg-gray-900 bg-opacity-50">
        <div class="relative w-full max-w-md p-4">
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-3 text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2"
                    data-modal-hide="popup-modal">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1l6 6m0 0l6 6M7 7L1 13m6-6l6-6" />
                    </svg>
                </button>
                <div class="p-5 text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this
                        product?</h3>
                    <div class="flex items-center justify-center space-x-3">
                        <button type="button"
                            class="px-5 py-2.5 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-800"
                            data-modal-hide="popup-modal">Yes, I'm sure</button>
                        <button type="button"
                            class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white rounded-lg border hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            data-modal-hide="popup-modal">No, cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <x-navbar />
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 p-10">
        <x-card title="{{ Auth::user()->name }}" description="This is a description for task 1." icon="task-line" link="/task/1" />

        <x-card title="Task 2" description="This is a description for task 2." icon="folder-line" link="/task/2" />

        <x-card title="Task 3" description="This is a description for task 3." icon="file-text-line"
            link="/task/3" />

        <x-card title="Task 4" description="This is a description for task 4." icon="calendar-line"
            link="/task/4" />
    </div>


    <div class="container mx-auto mb-24 mt-8">
        <div class="flex flex-wrap items-center justify-between gap-4 p-4 bg-white">
            <!-- Search Input -->
            <div class="relative">
                <input value="" placeholder="Search tasks..."
                    class="block w-full text-sm h-[50px] px-4 text-blue-700 bg-white rounded-lg border border-blue-500 appearance-none focus:border-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                <div class="absolute top-3 right-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" height="24"
                        width="24" class="text-blue-500">
                        <path
                            d="M10.979 16.8991C11.0591 17.4633 10.6657 17.9926 10.0959 17.9994C8.52021 18.0183 6.96549 17.5712 5.63246 16.7026C4.00976 15.6452 2.82575 14.035 2.30018 12.1709C1.77461 10.3068 1.94315 8.31525 2.77453 6.56596C3.60592 4.81667 5.04368 3.42838 6.82101 2.65875C8.59833 1.88911 10.5945 1.79039 12.4391 2.3809C14.2837 2.97141 15.8514 4.21105 16.8514 5.86977C17.8513 7.52849 18.2155 9.49365 17.8764 11.4005C17.5979 12.967 16.8603 14.4068 15.7684 15.543C15.3736 15.9539 14.7184 15.8787 14.3617 15.4343C14.0051 14.9899 14.0846 14.3455 14.4606 13.9173C15.1719 13.1073 15.6538 12.1134 15.8448 11.0393C16.0964 9.62426 15.8261 8.166 15.0841 6.93513C14.3421 5.70426 13.1788 4.78438 11.81 4.34618C10.4412 3.90799 8.95988 3.98125 7.641 4.55236C6.32213 5.12348 5.25522 6.15367 4.63828 7.45174C4.02135 8.74982 3.89628 10.2276 4.28629 11.6109C4.67629 12.9942 5.55489 14.1891 6.75903 14.9737C7.67308 15.5693 8.72759 15.8979 9.80504 15.9333C10.3746 15.952 10.8989 16.3349 10.979 16.8991Z">
                        </path>
                        <rect transform="rotate(-49.6812 12.2469 14.8859)" rx="1" height="10.1881"
                            width="2" y="14.8859" x="12.2469"></rect>
                    </svg>
                </div>
            </div>

            <!-- Add Task Button -->
            <!-- Modal toggle -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="flex items-center justify-center gap-2 rounded-lg w-36 h-[50px] bg-blue-500 text-white font-semibold border border-blue-500 hover:bg-blue-600 transition"
                type="button">
                <span> Add </span>
                <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="12" x2="12" y1="5" y2="19"></line>
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                </svg>
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm">
                        <th class="px-6 py-4 text-left">No.</th>
                        <th class="px-6 py-4 text-left">Task Name</th>
                        <th class="px-6 py-4 text-left">Description</th>
                        <th class="px-6 py-4 text-left">Due Date</th>
                        <th class="px-6 py-4 text-left">Status</th>
                        <th class="px-6 py-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Build Task Manager</td>
                        <td class="px-6 py-4">Create a basic task management system</td>
                        <td class="px-6 py-4">2025-01-10</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-200 text-green-800 text-xs rounded-full">Completed</span>
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600"
                                data-modal-target="edit-modal" data-modal-toggle="edit-modal">Edit</button>
                            <button class="px-4 py-2 bg-red-500 text-white text-sm rounded hover:bg-red-600"
                                data-modal-target="popup-modal" data-modal-toggle="popup-modal">Delete</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Design Table</td>
                        <td class="px-6 py-4">Create a responsive table for tasks</td>
                        <td class="px-6 py-4">2025-01-15</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-yellow-200 text-yellow-800 text-xs rounded-full">Pending</span>
                        </td>
                        <td class="px-6 py-4">
                            <button
                                class="px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">Edit</button>
                            <button
                                class="px-4 py-2 bg-red-500 text-white text-sm rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <x-footer />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>
