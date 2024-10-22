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

Laravel To-Do List Application
Project Overview
This is a To-Do List application built using the Laravel framework, designed to help users manage tasks effectively. The application supports key functionalities like adding, viewing, editing, and deleting tasks, as well as marking tasks as completed. The project implements user authentication, task validation, and a responsive user interface for both mobile and desktop.

Features
Add, Edit, and Delete Tasks: Manage tasks effortlessly with intuitive CRUD operations.
Task Completion: Mark tasks as completed or pending.
User Authentication: Secure user management with registration, login, and logout features.
Responsive Design: Optimized for mobile and desktop views.
Task Validation: Ensures all task inputs are validated before submission.
Database Management: Tasks are stored in a MySQL/PostgreSQL database.

Installation

Requirements
PHP >= 8.0
Composer (Dependency Manager)
MySQL or PostgreSQL database
Git

----Clone the Repository
bash
git clone https://github.com/your-username/your-repository.git
cd your-repository

----Install Dependencies
By Composer installed. Then, run:
bash
composer install

----Set Up the Environment File
Create a .env file by copying the example:
bash 
cp .env.example .env

----Then, update the .env file with your database credentials:
bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

----Generate the Application Key
bash 
php artisan key:generate

----Run Database Migrations
bash 
php artisan migrate

----Serve the Application Locally
We can serve the application locally with:
bash 
php artisan serve
Open your browser and navigate to http://127.0.0.1:8000.

Deployment on Render
This project is ready for deployment on Render. Follow these steps to deploy:

----Create a Render Account
If you don’t have an account, sign up on Render.

----Link the GitHub Repository
On Render, click New Web Service.
Connect your GitHub repository.
Select the branch to deploy (e.g., main or master)(In my case it is main)
Set up environment variables, including your database credentials in the Environment section (use the same settings as in the .env file).

----Configure Build Commands
Install Dependencies:
bash
composer install --optimize-autoloader --no-dev

----Run Migrations:
bash
php artisan migrate --force
Run Application: Render will automatically serve your application.

----View Deployed App
Once deployed, your application will be accessible via a public URL provided by Render.

Technologies Used
Laravel - Backend framework.
Blade - Templating engine.
Xampp-For Apache and MySQL 
MySQL - Relational database management.
Bootstrap - Some part of Bootstrap for Responsive design framework for the UI.
Render - For Deployment 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
