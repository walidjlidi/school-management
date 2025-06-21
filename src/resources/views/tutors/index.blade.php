@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">المعلمين</h1>
    <a class="bg-gray-800 text-white px-4 py-2 rounded" href="{{ route('admin.tutors.create') }}">إضافة</a>
</div>
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-3 py-2 text-left text-sm font-medium">#</th>
            <th class="px-3 py-2 text-left text-sm font-medium">الاسم</th>
            <th class="px-3 py-2 text-left text-sm font-medium">البريد الإلكتروني</th>
            <th class="px-3 py-2 text-left text-sm font-medium">التخصص</th>
            <th class="px-3 py-2 text-left text-sm font-medium">إجراءات</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach($tutors as $tutor)
            <tr>
                <td class="px-3 py-2">{{ $tutor->id }}</td>
                <td class="px-3 py-2">{{ $tutor->first_name }} {{ $tutor->last_name }}</td>
                <td class="px-3 py-2">{{ $tutor->email }}</td>
                <td class="px-3 py-2">{{ $tutor->specialization }}</td>
                <td class="px-3 py-2 space-x-2 rtl:space-x-reverse">
                    <a class="text-blue-600" href="{{ route('admin.tutors.show', $tutor) }}">عرض</a>
                    <a class="text-yellow-600" href="{{ route('admin.tutors.edit', $tutor) }}">تعديل</a>
                    <form action="{{ route('admin.tutors.destroy', $tutor) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Delete?')">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
