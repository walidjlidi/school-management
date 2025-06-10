@extends('admin.layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h1 class="mb-4 text-center">تسجيل الدخول</h1>
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">كلمة المرور</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">دخول</button>
        </form>
    </div>
</div>
@endsection
