<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/4.0.0"></script>
    <title>School Manager</title>
</head>
<body class="bg-gray-100">
<nav class="bg-gray-800 mb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-4 text-white">
                <a class="font-bold" href="{{ route('home') }}">SchoolManager</a>
                <a href="{{ route('students.index') }}" class="hover:underline">Students</a>
                <a href="{{ route('tutors.index') }}" class="hover:underline">Tutors</a>
                <a href="{{ route('materials.index') }}" class="hover:underline">Materials</a>
            </div>
        </div>
    </div>
</nav>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @yield('content')
</div>
</body>
</html>
