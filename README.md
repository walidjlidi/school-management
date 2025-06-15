# SchoolManager

This repository contains a Dockerized Laravel 10 application for managing students, tutors and materials. All pages use Tailwind CSS 4 with an Arabic RTL layout and provide login, registration and user management.

## Requirements

The easiest way to run the project is with Docker and Docker Compose. If you
prefer a manual setup you will need:

- PHP **8.1** or higher with the extensions `pdo_mysql`, `mbstring`, `xml` and
  `bcmath`.
- MySQL **8**.
- Node.js **18** or newer (only required if you plan to build assets locally –
  Tailwind is loaded via CDN by default).
- Composer **2**.

## Setup with Docker

1. Build and start the containers:
   ```bash
   docker-compose up --build
   ```
   On the first run the `init.sh` script inside the container will install
   Laravel, copy the source files and run the database migrations and seeders.
2. Visit `http://localhost:8000` for the public site.
3. The admin panel is available at `http://localhost:8000/admin`
   (login with `admin@example.com` / `password`).

### Updating containers

After pulling the latest code, rebuild the containers to install any new PHP
dependencies and apply database changes:

```bash
docker-compose build
```

Then run migrations inside the app container:

```bash
docker-compose run --rm app php artisan migrate --seed
```

If you add Composer packages, install them with:

```bash
docker-compose run --rm app composer install
```
### Composer inside the container

If the host environment does not have Composer installed you can execute any
Composer command through the `app` service:

```bash
docker-compose run --rm app composer --version
```

Replace `--version` with the command you need.

### Manual setup (without Docker)

1. Ensure PHP, Composer, Node.js and MySQL are installed as listed in the
   [Requirements](#requirements) section.
2. Copy the contents of the `src` directory into your working directory and run:
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```
3. Configure your `.env` database credentials and then run:
   ```bash
   php artisan migrate --seed
   ```
4. Start the development server:
   ```bash
   php artisan serve
   ```
5. If you later add frontend assets you can compile them with:
   ```bash
   npm install
   npm run dev
   ```

### Troubleshooting

- If `docker-compose up` fails, ensure Docker Desktop is running and that ports
  `8000` and `3306` are free.
- To reset the database, run `docker-compose down -v` and then `docker-compose up --build`.
- When running manually, verify that your PHP extensions match those listed in
  `Requirements` and that the database credentials in `.env` are correct.

