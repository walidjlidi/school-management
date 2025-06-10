@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Tutors</h1>
    <a class="btn btn-primary" href="{{ route('tutors.create') }}">Create</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Specialization</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tutors as $tutor)
            <tr>
                <td>{{ $tutor->id }}</td>
                <td>{{ $tutor->first_name }} {{ $tutor->last_name }}</td>
                <td>{{ $tutor->email }}</td>
                <td>{{ $tutor->specialization }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('tutors.show', $tutor) }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('tutors.edit', $tutor) }}">Edit</a>
                    <form action="{{ route('tutors.destroy', $tutor) }}" method="POST" style="display:inline-block">
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
