<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>School Manager</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">SchoolManager</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tutors.index') }}">Tutors</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('materials.index') }}">Materials</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
