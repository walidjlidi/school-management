@extends('layouts.' . (Request::is('admin/*') ? 'admin' : 'app'))
@section('page-title', 'تفاصيل المعلم')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <ul class="mb-4 space-y-2">
        <li>الاسم: {{ $tutor->first_name }} {{ $tutor->last_name }}</li>
        <li>البريد الإلكتروني: {{ $tutor->email }}</li>
        <li>التخصص: {{ $tutor->specialization }}</li>
    </ul>
    <a class="text-yellow-600 mr-2" href="{{ route(Request::is('admin/*') ? 'admin.tutors.edit' : 'tutors.edit', $tutor) }}"><i class="fa fa-edit"></i></a>
    <form id="delete-form-{{ $tutor->id }}" action="{{ route(Request::is('admin/*') ? 'admin.tutors.destroy' : 'tutors.destroy', $tutor) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>
    <a href="#" class="text-red-600 delete-button" data-form="delete-form-{{ $tutor->id }}"><i class="fa fa-trash"></i></a>
</div>
@endsection
