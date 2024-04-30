# Laravel CRUD Web Application

This is a simple CRUD (Create, Read, Update, Delete) web application built using Laravel framework. It allows users to manage customer data by performing basic CRUD operations.

## Features

- Create, Read, Update, and Delete customer data
- Validation rules enforced for data integrity and accuracy
- Easy-to-use interface for seamless data management

## Technologies Used

- Laravel
- MySQL
- HTML
- CSS
- JavaScript

## Installation

1. Clone the repository: git clone https://github.com/arpan9932/Laraval_CURD.git
2. Navigate into the project directory: cd your_project
3. Install dependencies: composer install
4. Copy .env.example to .env and configure your database settings
5. Generate application key: php artisan key:generate
6. Migrate and seed the database: php artisan migrate --seed
7. Serve the application: php artisan serve

## Usage

1. Access the application through your browser at http://localhost:8000
2. Navigate to the customer management section
3. Perform CRUD operations as needed

## Validation Rules

The following validation rules are enforced:

- Customer name: required, string, max:255
- Email: required, string, email, max:255, unique:customers
- Phone number: required, string, max:20
- Address: required, string, max:255

## Contributing

Contributions are welcome! Feel free to open an issue or submit a pull request.
