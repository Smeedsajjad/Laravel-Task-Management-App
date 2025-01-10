# Laravel Dark Mode Toggle with Tailwind CSS

This project demonstrates how to implement a dark mode toggle in a Laravel application using Tailwind CSS. The theme preference is stored in `localStorage`, so the selected theme persists across page reloads.

## Features

Here’s an overview of the features commonly found in a CRUD application, including pagination and authentication, using Laravel and Tailwind CSS:

CRUD Application Features

1. Authentication (Login/Registration)
   User Registration: Allows users to register with their email and password.
   Login: Users can log in to the application securely using their credentials.
   Password Reset: Option for users to reset their password if they forget it.
   Middleware Protection: Routes and actions are protected by authentication middleware, ensuring only logged-in users can access certain pages or resources.
2. CRUD Operations (Create, Read, Update, Delete)
   Create: Users can add new entries (e.g., products, tasks, etc.) to the database via forms.
   Read: Displays the list of all entries in the database, with options to view detailed information.
   Update: Allows users to update existing entries. Data can be fetched and shown in a form, allowing the user to edit and save changes.
   Delete: Provides an option to delete an entry from the database (usually with a confirmation modal).
3. Pagination
   Paginated Lists: Instead of showing all records on a single page, pagination breaks data into multiple pages for better performance and readability.
   Tailwind CSS Pagination: Tailwind can be used to style pagination components, ensuring responsiveness and a clean UI.
   Example of pagination with Laravel:

php
 
// Controller
$tasks = Task::paginate(10); // Fetch 10 tasks per page
return view('tasks.index', compact('tasks'));
blade
 

<!-- View (tasks.index.blade.php) -->
<div class="overflow-x-auto">
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td class="px-4 py-2">{{ $task->title }}</td>
                    <td class="px-4 py-2">{{ $task->description }}</td>
                    <td class="px-4 py-2">
                        <!-- Action buttons (edit, delete) -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-4">
        {{ $tasks->links() }} <!-- Pagination links -->
    </div>
</div>
4. Search Functionality
Users can search through the records by filtering data using a search form or input field.
Laravel's where clause can be used to filter results based on user input.
Example of search functionality:

php
 
// Controller
$tasks = Task::where('title', 'like', '%' . $request->search . '%')->paginate(10); 5. Validation and Error Handling
Laravel provides built-in validation for form data, ensuring that only valid data is stored in the database.
Error messages can be displayed on the form using Laravel's validation mechanism.
Example of form validation in the controller:

php
 
// Controller
$request->validate([
'title' => 'required|string|max:255',
'description' => 'required|string|max:500',
]); 6. File Upload (Optional)
Users can upload files (e.g., images, documents) associated with entries (e.g., product images, task attachments).
Laravel provides an easy way to handle file uploads.
Example of file upload:

php
 
// Controller
if ($request->hasFile('image')) {
$path = $request->file('image')->store('public/images');
} 7. Modals for Confirmation and Form Input
Create/Update Modals: For adding or editing records, you can use modals with Tailwind CSS.
Delete Confirmation Modal: Before deleting a record, a confirmation modal can be used to confirm the action.
Example of a delete modal:

html
 

<!-- Modal -->
<div id="delete-modal" class="hidden fixed inset-0 z-50 items-center justify-center w-full h-screen bg-gray-900 bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg dark:bg-gray-700 p-5">
        <h3 class="text-lg">Are you sure you want to delete this item?</h3>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Yes, delete</button>
            <button type="button" class="bg-gray-300 px-4 py-2 rounded" data-modal-close>Cancel</button>
        </form>
    </div>
</div>
8. Tailwind CSS Styling
Tailwind CSS helps in building responsive and aesthetically pleasing UIs.
Common Tailwind classes like bg-gray-50, text-center, px-4 py-2, rounded-lg, etc., are used to style elements.
Example of Tailwind classes for a card:

html
 

<div class="bg-white shadow-lg p-4 rounded-lg max-w-sm mx-auto">
    <h3 class="font-semibold text-xl text-gray-800">Task Title</h3>
    <p class="text-gray-600">Task Description</p>
</div>
Conclusion
The app provides a full-featured CRUD interface with authentication, pagination, search, modals, validation, file uploads, and a stylish UI with Tailwind CSS. You can use these features to build a robust web application in Laravel, offering a smooth user experience with secure access, easy management of data, and responsive design.

## Installation

Follow the steps below to set up this project on your local machine.

### Prerequisites

Make sure you have the following installed:

-   [PHP](https://www.php.net/downloads.php) (Version 7.3 or higher)
-   [Composer](https://getcomposer.org/) (Dependency Manager for PHP)
-   [Node.js](https://nodejs.org/) (For compiling assets)
-   [Laravel](https://laravel.com/docs) (If not already installed)

### Clone the Repository

Clone this repository to your local machine using the following command:

```bash
git clone https://github.com/your-username/laravel-dark-mode-toggle.git
cd laravel-dark-mode-toggle
```

Install Dependencies
Run the following commands to install PHP and JavaScript dependencies:

```bash

```

# Install PHP dependencies

composer install

# Install JavaScript dependencies

npm install
Set Up Environment File
Make a copy of the .env.example file and rename it to .env. Then, configure your environment settings, such as the database connection.

```bash
cp .env.example .env
Generate Application Key
Generate the Laravel application key:
```

bash
 
php artisan key:generate
Run the Development Server
Start the Laravel development server:

```bash
php artisan serve
By default, the application will be accessible at http://localhost:8000.
```

```bash
Compile Assets
You need to compile the frontend assets using npm:
```

```bash
Or, to build for production:
npm run dev
```

```bash
npm run build
Dark Mode Toggle
The dark mode toggle is implemented using Tailwind CSS's dark mode class. The theme preference is stored in the browser's localStorage, so the selected theme will persist between page reloads.
```

Contributing
If you'd like to contribute to this project, feel free to fork the repository, create a new branch, and submit a pull request with your changes.

License
This project is licensed under the MIT License - see the LICENSE file for details.

Acknowledgments
Tailwind CSS for making it easy to implement responsive and customizable designs.
Laravel for being a fantastic PHP framework.
Dark Mode for a smooth user experience.
sql

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
