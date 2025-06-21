<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>لوحة التحكم</title>
    @stack('styles')
</head>
<body class="bg-gray-100 flex">
@include('layouts.partials.admin-sidebar')
<div class="flex-1 min-h-screen flex flex-col">
    <nav class="bg-white border-b flex items-center justify-between h-14 px-4">
        <button id="sidebarToggle" class="sm:hidden text-gray-600"><i class="fa fa-bars"></i></button>
        <span class="font-bold">لوحة التحكم</span>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="text-red-600 hover:underline"><i class="fa fa-sign-out-alt ml-1"></i>خروج</button>
        </form>
    </nav>
    <main class="p-4 flex-1">
        <x-admin-breadcrumbs />
        @include('layouts.partials.flash')
        @yield('content')
    </main>
</div>
<script>
    document.getElementById('sidebarToggle').addEventListener('click', () => {
        document.getElementById('adminSidebar').classList.toggle('-translate-x-full');
    });
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', e => {
            if(!confirm('هل أنت متأكد من الحذف؟')){
                e.preventDefault();
            }
        });
    });
</script>
@stack('scripts')
</body>
</html>
