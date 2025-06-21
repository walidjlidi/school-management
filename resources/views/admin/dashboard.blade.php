@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
    <div class="bg-white rounded shadow p-6">
        <h5 class="mb-2">إجمالي عدد الطلاب</h5>
        <p class="text-4xl font-bold">{{ $students }}</p>
    </div>
    <div class="bg-white rounded shadow p-6">
        <h5 class="mb-2">إجمالي عدد المعلمين</h5>
        <p class="text-4xl font-bold">{{ $tutors }}</p>
    </div>
    <div class="bg-white rounded shadow p-6">
        <h5 class="mb-2">إجمالي عدد المواد</h5>
        <p class="text-4xl font-bold">{{ $materials }}</p>
    </div>
</div>
@endsection
