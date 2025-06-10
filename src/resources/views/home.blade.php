@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Students</h5>
                <p class="card-text display-5">{{ $students }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Tutors</h5>
                <p class="card-text display-5">{{ $tutors }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Materials</h5>
                <p class="card-text display-5">{{ $materials }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
