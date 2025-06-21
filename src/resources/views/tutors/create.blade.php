@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">إضافة معلم</h1>
<form action="{{ route('admin.tutors.store') }}" method="POST" class="space-y-4">
    @include('tutors._form')
</form>
@endsection
