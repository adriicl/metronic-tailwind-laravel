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
        // Recupera el último usuario añadido
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
        // Verifica que el usuario que está intentando actualizar sea el autenticado
        if ($user->id !== Auth::id()) {
            return redirect()->route('welcome')->with('error', 'No tienes permiso para editar este perfil');
        }

        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'email|max:255|unique:users,email'
        ]);

        // Actualiza el nombre
        $user->name = $request->name;

        // Si hay un archivo de imagen
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }

        // Guarda los cambios
        $user->save();


        return back()->with('success', 'Perfil actualizado correctamente.');
    }
}
