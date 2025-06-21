<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        return view('students.index', ['students' => Student::all()]);
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(StudentRequest $request): RedirectResponse
    {
        Student::create($request->validated());
        return redirect()->route('admin.students.index');
    }

    public function show(Student $student): View
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student): View
    {
        return view('students.edit', compact('student'));
    }

    public function update(StudentRequest $request, Student $student): RedirectResponse
    {
        $student->update($request->validated());
        return redirect()->route('admin.students.index');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
        return redirect()->route('admin.students.index');
    }
}
