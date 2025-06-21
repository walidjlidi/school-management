<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Tutor;
use App\Http\Requests\MaterialRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MaterialController extends Controller
{
    public function index(): View
    {
        return view('materials.index', ['materials' => Material::with('tutor')->get()]);
    }

    public function create(): View
    {
        return view('materials.create', ['tutors' => Tutor::all()]);
    }

    public function store(MaterialRequest $request): RedirectResponse
    {
        Material::create($request->validated());
        return redirect()->route('admin.materials.index');
    }

    public function show(Material $material): View
    {
        return view('materials.show', compact('material'));
    }

    public function edit(Material $material): View
    {
        return view('materials.edit', ['material' => $material, 'tutors' => Tutor::all()]);
    }

    public function update(MaterialRequest $request, Material $material): RedirectResponse
    {
        $material->update($request->validated());
        return redirect()->route('admin.materials.index');
    }

    public function destroy(Material $material): RedirectResponse
    {
        $material->delete();
        return redirect()->route('admin.materials.index');
    }
}
