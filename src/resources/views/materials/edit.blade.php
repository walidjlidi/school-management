@extends('layouts.app')

@section('content')
<h1>Edit Material</h1>
<form action="{{ route('materials.update', $material) }}" method="POST">
    @method('PUT')
    @include('shared.form', ['item' => $material, 'tutors' => $tutors])
</form>
@endsection
