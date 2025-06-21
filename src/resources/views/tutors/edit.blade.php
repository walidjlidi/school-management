@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">تعديل معلم</h1>
<form action="{{ route('admin.tutors.update', $tutor) }}" method="POST" class="space-y-4">
    @method('PUT')
    @include('tutors._form', ['tutor' => $tutor])
</form>
@endsection
