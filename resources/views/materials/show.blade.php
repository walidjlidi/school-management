@extends('layouts.' . (Request::is('admin/*') ? 'admin' : 'app'))
@section('page-title', 'تفاصيل المادة')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <ul class="mb-4 space-y-2">
        <li>العنوان: {{ $material->title }}</li>
        <li>المعلم: {{ $material->tutor->first_name }} {{ $material->tutor->last_name }}</li>
        <li>الوصف: {{ $material->description }}</li>
    </ul>
    <a class="text-yellow-600 mr-2" href="{{ route(Request::is('admin/*') ? 'admin.materials.edit' : 'materials.edit', $material) }}"><i class="fa fa-edit"></i></a>
    <form id="delete-form-{{ $material->id }}" action="{{ route(Request::is('admin/*') ? 'admin.materials.destroy' : 'materials.destroy', $material) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>
    <a href="#" class="text-red-600 delete-button" data-form="delete-form-{{ $material->id }}"><i class="fa fa-trash"></i></a>
</div>
@endsection
