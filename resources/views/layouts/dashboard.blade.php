<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=cairo:400,700" rel="stylesheet" />
    <style>body{font-family:'Cairo',sans-serif;}</style>
    <title>@yield('page-title', 'لوحة التحكم')</title>
    @stack('styles')
</head>
<body class="bg-gray-100 flex" dir="rtl">
    <x-sidebar />
    <div class="flex-1 min-h-screen flex flex-col">
        <x-navbar />
        <main class="p-4 flex-1">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function(){
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
