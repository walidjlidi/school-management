<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/4.0.0"></script>
    <title>لوحة التحكم</title>
</head>
<body class="bg-gray-100">
<nav class="bg-gray-800 mb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 text-white">
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <a class="font-bold" href="{{ route('admin.dashboard') }}">SchoolManager</a>
                <a href="{{ route('admin.students.index') }}" class="hover:underline">الطلاب</a>
                <a href="{{ route('admin.tutors.index') }}" class="hover:underline">المعلمين</a>
                <a href="{{ route('admin.materials.index') }}" class="hover:underline">المواد</a>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="hover:underline">تسجيل الخروج</button>
            </form>
        </div>
    </div>
</nav>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @yield('content')
</div>
</body>
</html>
