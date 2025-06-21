@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">إضافة طالب</h1>
<form action="{{ route('admin.students.store') }}" method="POST" class="space-y-4">
    @include('students._form')
</form>
@endsection
