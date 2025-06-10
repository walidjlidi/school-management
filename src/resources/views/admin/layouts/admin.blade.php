<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <title>لوحة التحكم</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">SchoolManager</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.students.index') }}">الطلاب</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.tutors.index') }}">المعلمين</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.materials.index') }}">المواد</a></li>
            </ul>
            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-link">تسجيل الخروج</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
