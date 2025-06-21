# Local Setup Guide

This guide provides step-by-step instructions to run the SchoolManager project on your local machine without Docker.

## Requirements

- PHP **8.1** or higher with extensions `pdo_mysql`, `mbstring`, `xml` and `bcmath`
- MySQL **8**
- Node.js **18** or newer (only needed for building assets)
- Composer **2**

## Steps

1. Copy everything inside the `src` directory to your working folder.
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Create the environment file and generate the application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Edit `.env` with your database credentials.
5. Run database migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```
6. (Optional) If you plan to compile frontend assets locally:
   ```bash
   npm install
   npm run dev
   ```
7. Start the development server:
   ```bash
   php artisan serve
   ```

## Troubleshooting

- Ensure required PHP extensions are installed.
- Verify MySQL connection details in `.env`.
- For a fresh database, run `php artisan migrate:fresh --seed`.
