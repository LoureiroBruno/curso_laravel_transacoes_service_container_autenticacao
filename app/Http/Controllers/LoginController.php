<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('login.index');
    }

    public function store(Request $request): string
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withErrors('Usuário ou senha inválidos');
        }

        return to_route('series.index')->with('success', 'Logado com sucessso!');
    }

    public function destroy(Request $request)
    {   
        Auth::logout();

        return to_route('login');
    }
}
