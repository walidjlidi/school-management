@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">تفاصيل المادة</h1>
<ul class="mb-4 space-y-2">
    <li>العنوان: {{ $material->title }}</li>
    <li>المعلم: {{ $material->tutor->first_name }} {{ $material->tutor->last_name }}</li>
    <li>الوصف: {{ $material->description }}</li>
</ul>
<a class="text-yellow-600 mr-2" href="{{ route('admin.materials.edit', $material) }}">تعديل</a>
<form action="{{ route('admin.materials.destroy', $material) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button class="text-red-600" onclick="return confirm('Delete?')">حذف</button>
</form>
@endsection
