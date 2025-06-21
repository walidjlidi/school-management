<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Http\Requests\TutorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TutorController extends Controller
{
    public function index(): View
    {
        return view('tutors.index', ['tutors' => Tutor::all()]);
    }

    public function create(): View
    {
        return view('tutors.create');
    }

    public function store(TutorRequest $request): RedirectResponse
    {
        Tutor::create($request->validated());
        return redirect()->route('tutors.index');
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
        return redirect()->route('tutors.index');
    }

    public function destroy(Tutor $tutor): RedirectResponse
    {
        $tutor->delete();
        return redirect()->route('tutors.index');
    }
}
