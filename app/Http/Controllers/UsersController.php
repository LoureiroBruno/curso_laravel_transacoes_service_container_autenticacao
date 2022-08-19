<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersFormRequestCreate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create() 
    {
        $message = "Campo de -email inválido";
        return view('users.create')->with('danger', $message);
    }

    public function store(UsersFormRequestCreate $request) 
    {
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        
        /** pega o resultado $user e torna-lo logado*/
        Auth::login($user);
    
        /** usuário criado dao um redirecionamento para series.index */
        return to_route('series.index');

    }
}
