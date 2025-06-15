@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Create Tutor</h1>
<form action="{{ route('tutors.store') }}" method="POST" class="space-y-4">
    @include('tutors._form')
</form>
@endsection
