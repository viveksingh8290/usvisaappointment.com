# Laravel Project

This is a Laravel-based project. Follow the instructions below to set up and run the project locally.

## Prerequisites

Ensure you have the following software installed:

- PHP >= 8.1
- Composer
- Laravel Installer
- MySQL or any other database

## Setup Instructions

### 1. Clone the Repository

Clone this repository to your local machine:

```bash
git clone https://github.com/viveksingh8290/usvisaappointment.com/
cd usvisaappointment.com
```

### 2. Install PHP Dependencies

Run the following command to install the required PHP packages:

```bash
composer install
```

### 3. Set Up Environment File

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Then, configure the `.env` file with your database and other configuration settings.

### 4. Generate Application Key

Run the following command to generate the application key:

```bash
php artisan key:generate
```

### 5. Set Up Database

Create a new database in MySQL (or your preferred database).

Then, run the following command to migrate the database schema:

```bash
php artisan migrate
```

If your project has seed data, you can use the following command to seed the database:

```bash
php artisan db:seed
```

### 6. Serve the Application

Run the following command to serve the application locally:

```bash
php artisan serve
```

By default, the application will be available at `http://localhost:8000`.

### 7. Testing

To run the tests for your Laravel application, use the following command:

```bash
php artisan test
```
