<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->input('search');
        $students = Student::query()
            ->when($search, function ($query, $search) {
                $query->where('first_name', 'like', "%{$search}%")
                    ->orWhere('last_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString();

        return view('students.index', [
            'students' => $students,
            'search' => $search,
        ]);
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(StudentRequest $request): RedirectResponse
    {
        Student::create($request->validated());
        return redirect()->route('students.index')->with('success', 'تم إضافة الطالب بنجاح');
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
        return redirect()->route('students.index')->with('success', 'تم تحديث بيانات الطالب');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'تم حذف الطالب');
    }
}
