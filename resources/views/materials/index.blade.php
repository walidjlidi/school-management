@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">المواد</h1>
    <a class="bg-gray-800 text-white px-4 py-2 rounded" href="{{ route('materials.create') }}">إضافة</a>
</div>
<form method="GET" class="mb-4 flex space-x-2 rtl:space-x-reverse">
    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="بحث عن مادة" class="border rounded px-3 py-1 flex-1">
    <button class="bg-gray-800 text-white px-4 py-1 rounded">بحث</button>
</form>
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-3 py-2 text-left text-sm font-medium">#</th>
            <th class="px-3 py-2 text-left text-sm font-medium">العنوان</th>
            <th class="px-3 py-2 text-left text-sm font-medium">المعلم</th>
            <th class="px-3 py-2 text-left text-sm font-medium">إجراءات</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach($materials as $material)
            <tr>
                <td class="px-3 py-2">{{ $material->id }}</td>
                <td class="px-3 py-2">{{ $material->title }}</td>
                <td class="px-3 py-2">{{ $material->tutor->first_name }} {{ $material->tutor->last_name }}</td>
                <td class="px-3 py-2 space-x-2 rtl:space-x-reverse">
                    <a class="text-blue-600" href="{{ route('materials.show', $material) }}">عرض</a>
                    <a class="text-yellow-600" href="{{ route('materials.edit', $material) }}">تعديل</a>
                    <form action="{{ route('materials.destroy', $material) }}" method="POST" class="inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $materials->links() }}
</div>
@endsection
