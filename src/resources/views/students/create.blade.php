@extends('layouts.app')

@section('content')
<h1>Create Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @include('shared.form')
</form>
@endsection
