@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">Materials</h1>
    <a class="bg-gray-800 text-white px-4 py-2 rounded" href="{{ route('materials.create') }}">Create</a>
</div>
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-3 py-2 text-left text-sm font-medium">ID</th>
            <th class="px-3 py-2 text-left text-sm font-medium">Title</th>
            <th class="px-3 py-2 text-left text-sm font-medium">Tutor</th>
            <th class="px-3 py-2 text-left text-sm font-medium">Actions</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach($materials as $material)
            <tr>
                <td class="px-3 py-2">{{ $material->id }}</td>
                <td class="px-3 py-2">{{ $material->title }}</td>
                <td class="px-3 py-2">{{ $material->tutor->first_name }} {{ $material->tutor->last_name }}</td>
                <td class="px-3 py-2 space-x-2 rtl:space-x-reverse">
                    <a class="text-blue-600" href="{{ route('materials.show', $material) }}">Show</a>
                    <a class="text-yellow-600" href="{{ route('materials.edit', $material) }}">Edit</a>
                    <form action="{{ route('materials.destroy', $material) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
