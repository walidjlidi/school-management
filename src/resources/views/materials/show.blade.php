@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Material Details</h1>
<ul class="mb-4 space-y-2">
    <li>Title: {{ $material->title }}</li>
    <li>Tutor: {{ $material->tutor->first_name }} {{ $material->tutor->last_name }}</li>
    <li>Description: {{ $material->description }}</li>
</ul>
<a class="text-yellow-600 mr-2" href="{{ route('materials.edit', $material) }}">Edit</a>
<form action="{{ route('materials.destroy', $material) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button class="text-red-600" onclick="return confirm('Delete?')">Delete</button>
</form>
@endsection
