# Laravel Dark Mode Toggle with Tailwind CSS

This project demonstrates how to implement a dark mode toggle in a Laravel application using Tailwind CSS. The theme preference is stored in `localStorage`, so the selected theme persists across page reloads.

## Features
- Dark mode toggle using a button.
- Theme preference is saved in `localStorage`.
- Tailwind CSS dark mode utilities are used for styling.
- Seamless transition between light and dark modes.

## Installation

Follow the steps below to set up this project on your local machine.

### Prerequisites

Make sure you have the following installed:
- [PHP](https://www.php.net/downloads.php) (Version 7.3 or higher)
- [Composer](https://getcomposer.org/) (Dependency Manager for PHP)
- [Node.js](https://nodejs.org/) (For compiling assets)
- [Laravel](https://laravel.com/docs) (If not already installed)

### Clone the Repository

Clone this repository to your local machine using the following command:

```bash
git clone https://github.com/your-username/laravel-dark-mode-toggle.git
cd laravel-dark-mode-toggle

Install Dependencies
Run the following commands to install PHP and JavaScript dependencies:

bash
Copy code
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
Set Up Environment File
Make a copy of the .env.example file and rename it to .env. Then, configure your environment settings, such as the database connection.

bash
Copy code
cp .env.example .env
Generate Application Key
Generate the Laravel application key:

bash
Copy code
php artisan key:generate
Run the Development Server
Start the Laravel development server:

bash
Copy code
php artisan serve
By default, the application will be accessible at http://localhost:8000.

Compile Assets
You need to compile the frontend assets using npm:

bash
Copy code
npm run dev
Or, to build for production:

bash
Copy code
npm run build
Dark Mode Toggle
The dark mode toggle is implemented using Tailwind CSS's dark mode class. The theme preference is stored in the browser's localStorage, so the selected theme will persist between page reloads.

How it Works
When the page loads, it checks the user's theme preference stored in localStorage.
If the theme is dark, it adds the dark class to the <html> tag, which applies Tailwind's dark mode styles.
When the toggle button is clicked, the dark class is toggled on the <html> tag, and the new theme preference is saved in localStorage.
Example Usage
In the Blade view files (e.g., resources/views/layouts/app.blade.php), you can use Tailwind's dark mode utilities:

html
Copy code
<div class="bg-white dark:bg-gray-800 text-black dark:text-white">
    <p>This text is black in light mode and white in dark mode.</p>
</div>
This will switch between light and dark background and text colors based on the selected theme.

Contributing
If you'd like to contribute to this project, feel free to fork the repository, create a new branch, and submit a pull request with your changes.

License
This project is licensed under the MIT License - see the LICENSE file for details.

Acknowledgments
Tailwind CSS for making it easy to implement responsive and customizable designs.
Laravel for being a fantastic PHP framework.
Dark Mode for a smooth user experience.
sql
Copy code

This `README.md` provides clear instructions to set up and use your Laravel project with dark 


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
