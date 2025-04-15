<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {

        $lastUser = User::latest()->first();

        // Pasa el usuario a la vista
        return view('user-profile', compact('lastUser'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {

        if ($user->id !== Auth::id()) {
            return redirect()->route('welcome')->with('error', 'No tienes permiso para editar este perfil');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'email|max:255|unique:users,email',
            'birthday' => 'nullable|date',
            'gender' => 'nullable|string|in:male,female',
            'address' => 'nullable|string|max:255'
        ]);

        $user->name = $request->name;

        $user->save();

        return back()->with('success', 'Perfil actualizado correctamente.');
    }
}
