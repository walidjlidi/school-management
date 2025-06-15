<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('admin.users.index', ['users' => User::all()]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $data = $request->validate([
            'role' => ['required', 'in:student,tutor'],
            'is_active' => ['sometimes', 'boolean'],
        ]);

        $user->role = $data['role'];
        $user->is_active = $request->has('is_active');
        $user->save();

        return redirect()->route('admin.users.index');
    }
}
