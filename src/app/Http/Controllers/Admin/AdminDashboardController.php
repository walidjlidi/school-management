<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\Material;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function publicHome(): View
    {
        return view('home', [
            'students' => Student::count(),
            'tutors' => Tutor::count(),
            'materials' => Material::count(),
        ]);
    }

    public function index(): View
    {
        return view('admin.dashboard', [
            'students' => Student::count(),
            'tutors' => Tutor::count(),
            'materials' => Material::count(),
        ]);
    }
}
