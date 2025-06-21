@extends('layouts.' . (Request::is('admin/*') ? 'admin' : 'app'))
@section('page-title', 'تفاصيل الطالب')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <ul class="mb-4 space-y-2">
        <li>الاسم: {{ $student->first_name }} {{ $student->last_name }}</li>
        <li>البريد الإلكتروني: {{ $student->email }}</li>
        <li>تاريخ الميلاد: {{ $student->date_of_birth }}</li>
    </ul>
    <a class="text-yellow-600 mr-2" href="{{ route(Request::is('admin/*') ? 'admin.students.edit' : 'students.edit', $student) }}"><i class="fa fa-edit"></i></a>
    <form id="delete-form-{{ $student->id }}" action="{{ route(Request::is('admin/*') ? 'admin.students.destroy' : 'students.destroy', $student) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>
    <a href="#" class="text-red-600 delete-button" data-form="delete-form-{{ $student->id }}"><i class="fa fa-trash"></i></a>
</div>
@endsection
