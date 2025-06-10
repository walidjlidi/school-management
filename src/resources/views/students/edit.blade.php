@extends('layouts.app')

@section('content')
<h1>Edit Student</h1>
<form action="{{ route('students.update', $student) }}" method="POST">
    @method('PUT')
    @include('shared.form', ['item' => $student])
</form>
@endsection
