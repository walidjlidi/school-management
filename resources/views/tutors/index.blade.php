@extends('layouts.' . (Request::is('admin/*') ? 'admin' : 'app'))
@section('page-title', 'المعلمين')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">المعلمين</h1>
    <a class="bg-gray-800 text-white px-4 py-2 rounded" href="{{ route(Request::is('admin/*') ? 'admin.tutors.create' : 'tutors.create') }}">إضافة</a>
</div>
<form method="GET" class="mb-4 flex space-x-2 rtl:space-x-reverse">
    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="بحث عن معلم" class="border rounded px-3 py-1 flex-1">
    <button class="bg-gray-800 text-white px-4 py-1 rounded">بحث</button>
</form>
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
                    <a class="text-blue-600" href="{{ route(Request::is('admin/*') ? 'admin.tutors.show' : 'tutors.show', $tutor) }}"><i class="fa fa-eye"></i></a>
                    <a class="text-yellow-600" href="{{ route(Request::is('admin/*') ? 'admin.tutors.edit' : 'tutors.edit', $tutor) }}"><i class="fa fa-edit"></i></a>
                    <form id="delete-form-{{ $tutor->id }}" action="{{ route(Request::is('admin/*') ? 'admin.tutors.destroy' : 'tutors.destroy', $tutor) }}" method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                    <a href="#" class="text-red-600 delete-button" data-form="delete-form-{{ $tutor->id }}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $tutors->links() }}
</div>
@endsection
