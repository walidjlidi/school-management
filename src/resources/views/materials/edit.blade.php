@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">تعديل مادة</h1>
<form action="{{ route('admin.materials.update', $material) }}" method="POST" class="space-y-4">
    @method('PUT')
    @include('materials._form', ['material' => $material, 'tutors' => $tutors])
</form>
@endsection
