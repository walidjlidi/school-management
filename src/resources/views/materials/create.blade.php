@extends('layouts.app')

@section('content')
<h1>Create Material</h1>
<form action="{{ route('materials.store') }}" method="POST">
    @include('shared.form', ['tutors' => $tutors])
</form>
@endsection
