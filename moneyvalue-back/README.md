# Getting Started
This project is a simple Laravel application that demonstrates how to generate a .env and vendor file.

## Prerequisites
You must have PHP 7.3 or higher installed.

You must have Composer installed.

## Installation
1. Run ``composer install`` to install the dependencies.
2. Copy the .env.example file to .env and edit the file to provide your database connection information. (To do such, you can use thoses two commands :
``cp .env.example .env``)
3. Generate a new application key. (To do such you can use the command ``php artisan key:generate``)
4. Run ``php artisan migrate`` to create the database tables.
5. Run ``php artisan db:seed`` to create data inside the tables.
## Running the Application
1. Run php artisan serve to start the development server.
2. Open your browser and navigate to http://localhost:8000.

The welcome page on http://localhost:8000 show you a brief insight of how the API work and the which requests are implemented or not.

The .env file contains the application's environment variables, such as the database connection information.