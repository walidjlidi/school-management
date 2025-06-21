@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">تفاصيل الطالب</h1>
<ul class="mb-4 space-y-2">
    <li>الاسم: {{ $student->first_name }} {{ $student->last_name }}</li>
    <li>البريد الإلكتروني: {{ $student->email }}</li>
    <li>تاريخ الميلاد: {{ $student->date_of_birth }}</li>
</ul>
<a class="text-yellow-600 mr-2" href="{{ route('admin.students.edit', $student) }}">تعديل</a>
<form action="{{ route('admin.students.destroy', $student) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button class="text-red-600" onclick="return confirm('Delete?')">حذف</button>
</form>
@endsection
