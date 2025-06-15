@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Material</h1>
<form action="{{ route('materials.update', $material) }}" method="POST" class="space-y-4">
    @method('PUT')
    @include('materials._form', ['material' => $material, 'tutors' => $tutors])
</form>
@endsection
