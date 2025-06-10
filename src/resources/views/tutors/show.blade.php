@extends('layouts.app')

@section('content')
<h1>Tutor Details</h1>
<ul class="list-group mb-3">
    <li class="list-group-item">Name: {{ $tutor->first_name }} {{ $tutor->last_name }}</li>
    <li class="list-group-item">Email: {{ $tutor->email }}</li>
    <li class="list-group-item">Specialization: {{ $tutor->specialization }}</li>
</ul>
<a class="btn btn-warning" href="{{ route('tutors.edit', $tutor) }}">Edit</a>
<form action="{{ route('tutors.destroy', $tutor) }}" method="POST" style="display:inline-block">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
</form>
@endsection
