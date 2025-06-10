@extends('admin.layouts.admin')

@section('content')
<div class="row text-center">
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">إجمالي عدد الطلاب</h5>
                <p class="display-5">{{ $students }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">إجمالي عدد المعلمين</h5>
                <p class="display-5">{{ $tutors }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">إجمالي عدد المواد</h5>
                <p class="display-5">{{ $materials }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
