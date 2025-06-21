@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">تعديل طالب</h1>
<form action="{{ route('students.update', $student) }}" method="POST" class="space-y-4">
    @method('PUT')
    @include('students._form', ['student' => $student])
</form>
@endsection
