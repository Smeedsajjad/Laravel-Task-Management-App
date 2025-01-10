<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', value => localStorage.setItem('darkMode', value))" :class="{ 'dark': darkMode }">

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

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    <!-- Success alert -->
    @if (session('success'))
        <div id="alert-3"
            class="flex w-72 z-10 absolute bottom-0 right-4 items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <!-- Error alert -->
    @if (session('error'))
        <div id="alert-2"
            class="flex w-72 z-10 absolute bottom-0 right-4 items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('error') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif



    <x-navbar />
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 p-10">
        <x-card :title="$totalTasks" description="Total Task" icon="folder-line" link="/task/1" />
        <x-card :title="$completedTasks" description="Completed" icon="task-line" link="/task/2" />
        <x-card :title="$pendingTasks" description="Pending" icon="file-text-line" link="/task/3" />
        <x-card :title="$inProgressTasks" description="In Progress" icon="calendar-line" link="/task/4" />
    </div>

    <div class="container mx-auto mb-24 mt-8">
        <div
            class="flex flex-wrap items-center justify-between gap-4 p-4 bg-white dark:bg-gray-900 rounded-lg shadow-lg">
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
            <table class="min-w-full bg-white dark:bg-gray-900">
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
                </thead>
                <tbody>
                    @foreach ($tasks as $index => $task)
                        <tr class="border-b hover:bg-gray-100 dark:hover:bg-gray-800">
                            <td class="px-6 py-4">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">{{ $task->title }}</td>
                            <td class="px-6 py-4">{{ $task->description ?? 'Null' }}</td>
                            <td class="px-6 py-4">{{ $task->created_at }}</td>
                            <td class="px-6 py-4">
                                @if ($task->status === 'Completed')
                                    <span
                                        class="px-3 py-1 bg-green-200 text-green-800 text-xs rounded-full">Completed</span>
                                @elseif ($task->status === 'Pending')
                                    <span
                                        class="px-3 py-1 bg-yellow-200 text-yellow-800 text-xs rounded-full">Pending</span>
                                @else
                                    <span class="px-3 py-1 bg-blue-200 text-blue-800 text-xs rounded-full">In
                                        Progress</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <button class="px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600"
                                    data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                    data-task-id="{{ $task->id }}" data-task-title="{{ $task->title }}"
                                    data-task-description="{{ $task->description }}"
                                    data-task-status="{{ $task->status }}">Edit</button>
                                <button class="px-4 py-2 bg-red-500 text-white text-sm rounded hover:bg-red-600"
                                    data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                                    data-task-id="{{ $task->id }}">Delete</button>
                            </td>
                        </tr>
                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto p-4 overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white dark:bg-[#1F2937] rounded-lg shadow-lg">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b border-gray-200 dark:border-[#374151] rounded-t">
                                        <h3 class="text-lg font-semibold text-gray-800 dark:text-[#F9FAFB]">
                                            Create New Product
                                        </h3>
                                        <button type="button"
                                            class="text-gray-500 hover:text-gray-800 dark:text-[#D1D5DB] dark:hover:text-[#F9FAFB] bg-gray-900 hover:bg-gray-200 dark:hover:bg-[#374151] rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data"
                                        class="p-4 md:p-5">
                                        @csrf
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="title"
                                                    class="block mb-2 text-sm font-medium text-gray-800 dark:text-[#E5E7EB]">Title</label>
                                                <input type="text" name="title" id="title"
                                                    class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-[#3B82F6] focus:border-[#3B82F6] block w-full p-2.5 dark:bg-[#111827] dark:border-[#374151] dark:placeholder-[#6B7280] dark:text-[#F9FAFB] dark:focus:ring-[#60A5FA] dark:focus:border-[#60A5FA]"
                                                    placeholder="Type Title">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description"
                                                    class="block mb-2 text-sm font-medium text-gray-800 dark:text-[#E5E7EB]">Description</label>
                                                <textarea id="description" rows="4" name="description"
                                                    class="block p-2.5 w-full text-sm text-gray-800 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#3B82F6] focus:border-[#3B82F6] dark:bg-[#111827] dark:border-[#374151] dark:placeholder-[#6B7280] dark:text-[#F9FAFB] dark:focus:ring-[#60A5FA] dark:focus:border-[#60A5FA]"
                                                    placeholder="Write description here"></textarea>
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

                        <!-- Delete Modal -->
                        <div id="delete-modal" tabindex="-1"
                            class="hidden fixed inset-0 z-50 items-center justify-center w-full h-screen bg-gray-900 bg-opacity-50">
                            <div class="relative w-full max-w-md p-4">
                                <div class="bg-white rounded-lg shadow-lg dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-3 text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2"
                                        data-modal-hide="delete-modal">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M1 1l6 6m0 0l6 6M7 7L1 13m6-6l6-6" />
                                        </svg>
                                    </button>
                                    <div class="p-5 text-center">
                                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200"
                                            fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you
                                            sure you want to delete this task?</h3>
                                        <form id="delete-task-form" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-4 py-2 bg-red-500 text-white text-sm rounded hover:bg-red-600">Yes,
                                                delete it</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div id="edit-modal" tabindex="-1" aria-hidden="true"
                            class="hidden fixed inset-0 z-50 items-center justify-center w-full h-screen bg-gray-900 bg-opacity-50">
                            <div class="relative w-full max-w-md p-4 md:max-h-full">
                                <!-- Modal Content -->
                                <div class="bg-white rounded-lg shadow-lg dark:bg-gray-700 p-4">
                                    <!-- Modal Header -->
                                    <div class="flex items-center justify-between p-5 border-b dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Task</h3>
                                        <button type="button"
                                            class="text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2"
                                            data-modal-toggle="edit-modal">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 1l6 6m0 0l6 6M7 7L1 13m6-6l6-6" />
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal Body -->
                                    <form method="POST" id="edit-form" class="p-5">
                                        @csrf
                                        @method('PUT')
                                        <div class="grid gap-4 mb-4 grid-cols-1">
                                            <div>
                                                <label for="title"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                <input type="text" id="title" name="title"
                                                    value="{{ $task->title }}"
                                                    class="w-full p-2.5 text-sm rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white"
                                                    placeholder="Type Title" required>
                                            </div>
                                            <div>
                                                <label for="description"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                                <textarea id="description" rows="4" name="description"
                                                    class="w-full p-2.5 text-sm rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white"
                                                    placeholder="Write product description here">{{ $task->description }}</textarea>
                                            </div>
                                            <div>
                                                <label for="status"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                <select id="status" name="status"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="Pending">Pending</option>
                                                    <option value="In Progress">In Progress</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="flex items-center px-5 py-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Save
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            <div class="mt-4">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>

    <x-footer />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('[data-modal-target="delete-modal"]');
            const deleteForm = document.getElementById('delete-task-form');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const taskId = this.getAttribute('data-task-id');
                    deleteForm.setAttribute('action', `/tasks/${taskId}`);
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('[data-modal-target="edit-modal"]');
            const editForm = document.getElementById('edit-form');
            const title = document.getElementById('title');
            const description = document.getElementById('description');
            const status = document.getElementById('status');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Retrieve task data from data attributes
                    const taskId = this.getAttribute('data-task-id');
                    const taskTitle = this.getAttribute('data-task-title');
                    const taskDescription = this.getAttribute('data-task-description');
                    const taskStatus = this.getAttribute('data-task-status');

                    // Set modal form values
                    title.value = taskTitle || '';
                    description.value = taskDescription || '';
                    status.value = taskStatus || 'Pending'; // Default status if none is provided

                    // Update form action to include task ID
                    editForm.action = `/tasks/${taskId}`; // Update with your route structure
                });
            });
        });
    </script>
</body>

</html>
