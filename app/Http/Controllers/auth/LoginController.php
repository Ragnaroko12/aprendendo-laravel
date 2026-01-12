<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginController extends Controller
{
    public function login()
    {
        return view('components\login');
    }
    public function loginUser(Request $request)
    {
        // validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        // attempt to log the user in

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            request()->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Authentication failed...
        return back()->withErrors([
            'email' => 'as credenciais fornecidas não correspondem aos nossos registros.',
        ]);

    }
    function logout(Request $request):RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
