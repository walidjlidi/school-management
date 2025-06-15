# SchoolManager

This repository contains a Dockerized Laravel 10 application for managing students, tutors and materials. All pages now use Tailwind CSS 4 for styling.


## Setup

1. Build and start the containers:
   ```bash
   docker-compose up --build
   ```
   The first run will install Laravel and copy the project files automatically.
2. Visit `http://localhost:8000` for the public site.
3. Admin panel available at `http://localhost:8000/admin` (login with `admin@example.com` / `password`).


## Updating

After pulling the latest code, rebuild the containers to install any new PHP dependencies and apply database changes:

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

## Composer inside the container

The host environment may not have Composer installed. To run Composer
commands, use the `app` service:

```bash
docker-compose run --rm app composer --version
```

Replace `--version` with any Composer command you need.

## Setup

1. Build and start the containers:
   ```bash
   docker-compose up --build
   ```
The first run will install Laravel and copy the project files automatically.

2. Visit `http://localhost:8000` for the public site.
3. Admin panel available at `http://localhost:8000/admin` (login with `admin@example.com` / `password`).

