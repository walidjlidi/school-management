@extends('layouts.app')

@section('content')
<h1>Student Details</h1>
<ul class="list-group mb-3">
    <li class="list-group-item">Name: {{ $student->first_name }} {{ $student->last_name }}</li>
    <li class="list-group-item">Email: {{ $student->email }}</li>
    <li class="list-group-item">DOB: {{ $student->date_of_birth }}</li>
</ul>
<a class="btn btn-warning" href="{{ route('students.edit', $student) }}">Edit</a>
<form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline-block">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
</form>
@endsection
