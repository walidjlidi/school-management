@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">إضافة مادة</h1>
<form action="{{ route('admin.materials.store') }}" method="POST" class="space-y-4">
    @include('materials._form', ['tutors' => $tutors])
</form>
@endsection
