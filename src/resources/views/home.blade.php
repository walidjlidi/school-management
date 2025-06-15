@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
    <div class="bg-white rounded shadow p-6">
        <h5 class="mb-2">Students</h5>
        <p class="text-4xl font-bold">{{ $students }}</p>
    </div>
    <div class="bg-white rounded shadow p-6">
        <h5 class="mb-2">Tutors</h5>
        <p class="text-4xl font-bold">{{ $tutors }}</p>
    </div>
    <div class="bg-white rounded shadow p-6">
        <h5 class="mb-2">Materials</h5>
        <p class="text-4xl font-bold">{{ $materials }}</p>
    </div>
</div>
@endsection
