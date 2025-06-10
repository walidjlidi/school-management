@extends('layouts.app')

@section('content')
<h1>Edit Tutor</h1>
<form action="{{ route('tutors.update', $tutor) }}" method="POST">
    @method('PUT')
    @include('shared.form', ['item' => $tutor])
    <div class="mb-3">
        <label class="form-label">Specialization</label>
        <input type="text" name="specialization" class="form-control" value="{{ old('specialization', $tutor->specialization) }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
