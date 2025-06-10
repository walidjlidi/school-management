@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Materials</h1>
    <a class="btn btn-primary" href="{{ route('materials.create') }}">Create</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Tutor</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($materials as $material)
            <tr>
                <td>{{ $material->id }}</td>
                <td>{{ $material->title }}</td>
                <td>{{ $material->tutor->first_name }} {{ $material->tutor->last_name }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('materials.show', $material) }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('materials.edit', $material) }}">Edit</a>
                    <form action="{{ route('materials.destroy', $material) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
