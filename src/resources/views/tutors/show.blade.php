@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Tutor Details</h1>
<ul class="mb-4 space-y-2">
    <li>Name: {{ $tutor->first_name }} {{ $tutor->last_name }}</li>
    <li>Email: {{ $tutor->email }}</li>
    <li>Specialization: {{ $tutor->specialization }}</li>
</ul>
<a class="text-yellow-600 mr-2" href="{{ route('tutors.edit', $tutor) }}">Edit</a>
<form action="{{ route('tutors.destroy', $tutor) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button class="text-red-600" onclick="return confirm('Delete?')">Delete</button>
</form>
@endsection
