@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Student Details</h1>
<ul class="mb-4 space-y-2">
    <li>Name: {{ $student->first_name }} {{ $student->last_name }}</li>
    <li>Email: {{ $student->email }}</li>
    <li>DOB: {{ $student->date_of_birth }}</li>
</ul>
<a class="text-yellow-600 mr-2" href="{{ route('students.edit', $student) }}">Edit</a>
<form action="{{ route('students.destroy', $student) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button class="text-red-600" onclick="return confirm('Delete?')">Delete</button>
</form>
@endsection
