@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Create Material</h1>
<form action="{{ route('materials.store') }}" method="POST" class="space-y-4">
    @include('materials._form', ['tutors' => $tutors])
</form>
@endsection
