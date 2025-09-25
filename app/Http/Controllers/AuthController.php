<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function register(RegistroRequest $request) {
        $data = $request->validated();

        // Creamos el usuario
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // Retorna la respuesta
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user,
        ];
    }
    public function login(RegistroRequest $request) {
        // to dosda
    }
    public function logout(RegistroRequest $request) {
        // to doasd
    }
}
