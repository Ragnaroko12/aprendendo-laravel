<?php

namespace App\Http\Controllers\auth;

use App\Http\Requests\UserRegister;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller{
    public function index()
    {
        return view('components\cadastro');
    }

    public function registerUser(UserRegister $request)
    {
        // validação dos dados do formulário
        $request->validate(['name', 'email', 'password']);
        // criação do usuário
       $user = User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        // redireciona para a página de login após o registro bem-sucedido
        Auth::login($user) ;
        return redirect('/dashboard');
    }
}
