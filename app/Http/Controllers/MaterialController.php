<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Tutor;
use App\Http\Requests\MaterialRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MaterialController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->input('search');
        $materials = Material::with('tutor')
            ->when($search, function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString();

        return view('materials.index', [
            'materials' => $materials,
            'search' => $search,
        ]);
    }

    public function create(): View
    {
        return view('materials.create', ['tutors' => Tutor::all()]);
    }

    public function store(MaterialRequest $request): RedirectResponse
    {
        Material::create($request->validated());
        return redirect()->route('materials.index')->with('success', 'تم إضافة المادة بنجاح');
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
        return redirect()->route('materials.index')->with('success', 'تم تحديث بيانات المادة');
    }

    public function destroy(Material $material): RedirectResponse
    {
        $material->delete();
        return redirect()->route('materials.index')->with('success', 'تم حذف المادة');
    }
}
