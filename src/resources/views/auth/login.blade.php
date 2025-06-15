@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md">
        <h1 class="mb-6 text-center text-2xl font-bold">تسجيل الدخول</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-4 bg-white p-6 shadow rounded">
            @csrf
            <div>
                <label class="block mb-1">البريد الإلكتروني</label>
                <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block mb-1">كلمة المرور</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
            </div>
            <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded">دخول</button>
        </form>
    </div>
</div>
@endsection
