<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>@yield('page-title', 'لوحة التحكم')</title>
    @stack('styles')
</head>
<body class="bg-gray-100 flex">
@include('layouts.partials.admin-sidebar')
<div class="flex-1 min-h-screen flex flex-col">
    <nav class="bg-white border-b flex items-center justify-between h-14 px-4">
        <div class="flex items-center space-x-2 rtl:space-x-reverse">
            <button id="sidebarToggle" class="sm:hidden text-gray-600"><i class="fa fa-bars"></i></button>
            <div>
                <h1 class="font-bold text-lg">@yield('page-title', 'لوحة التحكم')</h1>
                <x-admin-breadcrumbs />
            </div>
        </div>
    </nav>
    <main class="p-4 flex-1">
        @include('layouts.partials.flash')
        @yield('content')
    </main>
</div>
@include('layouts.partials.delete-modal')
<script>
    document.getElementById('sidebarToggle').addEventListener('click', () => {
        document.getElementById('adminSidebar').classList.toggle('-translate-x-full');
    });
    let currentDeleteForm;
    document.querySelectorAll('.delete-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            currentDeleteForm = document.getElementById(btn.dataset.form);
            document.getElementById('deleteModal').classList.remove('hidden');
        });
    });
    document.getElementById('deleteCancel').addEventListener('click', () => {
        document.getElementById('deleteModal').classList.add('hidden');
    });
    document.getElementById('deleteConfirm').addEventListener('click', () => {
        if(currentDeleteForm) currentDeleteForm.submit();
    });
</script>
@stack('scripts')
</body>
</html>
