@extends('layouts.' . (Request::is('admin/*') ? 'admin' : 'app'))
@section('page-title', 'الطلاب')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">الطلاب</h1>
    <a class="bg-gray-800 text-white px-4 py-2 rounded" href="{{ route(Request::is('admin/*') ? 'admin.students.create' : 'students.create') }}">إضافة</a>
</div>
<form method="GET" class="mb-4 flex space-x-2 rtl:space-x-reverse">
    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="بحث عن طالب" class="border rounded px-3 py-1 flex-1">
    <button class="bg-gray-800 text-white px-4 py-1 rounded">بحث</button>
</form>
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-3 py-2 text-left text-sm font-medium">#</th>
            <th class="px-3 py-2 text-left text-sm font-medium">الاسم</th>
            <th class="px-3 py-2 text-left text-sm font-medium">البريد الإلكتروني</th>
            <th class="px-3 py-2 text-left text-sm font-medium">إجراءات</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach($students as $student)
            <tr>
                <td class="px-3 py-2">{{ $student->id }}</td>
                <td class="px-3 py-2">{{ $student->first_name }} {{ $student->last_name }}</td>
                <td class="px-3 py-2">{{ $student->email }}</td>
                <td class="px-3 py-2 space-x-2 rtl:space-x-reverse">
                    <a class="text-blue-600" href="{{ route(Request::is('admin/*') ? 'admin.students.show' : 'students.show', $student) }}"><i class="fa fa-eye"></i></a>
                    <a class="text-yellow-600" href="{{ route(Request::is('admin/*') ? 'admin.students.edit' : 'students.edit', $student) }}"><i class="fa fa-edit"></i></a>
                    <form id="delete-form-{{ $student->id }}" action="{{ route(Request::is('admin/*') ? 'admin.students.destroy' : 'students.destroy', $student) }}" method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                    <a href="#" class="text-red-600 delete-button" data-form="delete-form-{{ $student->id }}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $students->links() }}
</div>
@endsection
