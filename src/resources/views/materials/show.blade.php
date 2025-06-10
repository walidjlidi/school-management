@extends('layouts.app')

@section('content')
<h1>Material Details</h1>
<ul class="list-group mb-3">
    <li class="list-group-item">Title: {{ $material->title }}</li>
    <li class="list-group-item">Tutor: {{ $material->tutor->first_name }} {{ $material->tutor->last_name }}</li>
    <li class="list-group-item">Description: {{ $material->description }}</li>
</ul>
<a class="btn btn-warning" href="{{ route('materials.edit', $material) }}">Edit</a>
<form action="{{ route('materials.destroy', $material) }}" method="POST" style="display:inline-block">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
</form>
@endsection
