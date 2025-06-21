<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Http\Requests\TutorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TutorController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->input('search');
        $tutors = Tutor::query()
            ->when($search, function ($query, $search) {
                $query->where('first_name', 'like', "%{$search}%")
                    ->orWhere('last_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('specialization', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString();

        return view('tutors.index', [
            'tutors' => $tutors,
            'search' => $search,
        ]);
    }

    public function create(): View
    {
        return view('tutors.create');
    }

    public function store(TutorRequest $request): RedirectResponse
    {
        Tutor::create($request->validated());
        return redirect()->route('tutors.index')->with('success', 'تم إضافة المعلم بنجاح');
    }

    public function show(Tutor $tutor): View
    {
        return view('tutors.show', compact('tutor'));
    }

    public function edit(Tutor $tutor): View
    {
        return view('tutors.edit', compact('tutor'));
    }

    public function update(TutorRequest $request, Tutor $tutor): RedirectResponse
    {
        $tutor->update($request->validated());
        return redirect()->route('tutors.index')->with('success', 'تم تحديث بيانات المعلم');
    }

    public function destroy(Tutor $tutor): RedirectResponse
    {
        $tutor->delete();
        return redirect()->route('tutors.index')->with('success', 'تم حذف المعلم');
    }
}
