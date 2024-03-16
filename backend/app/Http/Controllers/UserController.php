<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Retorna una lista con todos los usuarios registrados
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Retorna un usuario específico
     */
    public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    /**
     * Crea un nuevo usuario
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create($request->all());
        return response()->json($user, 201);
    }
}
