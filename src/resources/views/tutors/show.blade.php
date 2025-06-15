@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">تفاصيل المعلم</h1>
<ul class="mb-4 space-y-2">
    <li>الاسم: {{ $tutor->first_name }} {{ $tutor->last_name }}</li>
    <li>البريد الإلكتروني: {{ $tutor->email }}</li>
    <li>التخصص: {{ $tutor->specialization }}</li>
</ul>
<a class="text-yellow-600 mr-2" href="{{ route('tutors.edit', $tutor) }}">تعديل</a>
<form action="{{ route('tutors.destroy', $tutor) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button class="text-red-600" onclick="return confirm('Delete?')">حذف</button>
</form>
@endsection
