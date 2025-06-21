@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md">
        <h1 class="mb-6 text-center text-2xl font-bold">إنشاء حساب</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-4 bg-white p-6 shadow rounded">
            @csrf
            <div>
                <label class="block mb-1">الاسم</label>
                <input type="text" name="name" class="w-full border rounded px-3 py-2" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block mb-1">البريد الإلكتروني</label>
                <input type="email" name="email" class="w-full border rounded px-3 py-2" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block mb-1">الدور</label>
                <select name="role" class="w-full border rounded px-3 py-2" required>
                    <option value="student" @selected(old('role') == 'student')>طالب</option>
                    <option value="tutor" @selected(old('role') == 'tutor')>معلم</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block mb-1">كلمة المرور</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block mb-1">تأكيد كلمة المرور</label>
                <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2" required>
            </div>
            <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded">تسجيل</button>
        </form>
    </div>
</div>
@endsection
