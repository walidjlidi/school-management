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
