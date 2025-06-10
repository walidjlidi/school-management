@extends('layouts.app')

@section('content')
<h1>Create Tutor</h1>
<form action="{{ route('tutors.store') }}" method="POST">
    @include('shared.form')
    <div class="mb-3">
        <label class="form-label">Specialization</label>
        <input type="text" name="specialization" class="form-control" value="{{ old('specialization') }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
