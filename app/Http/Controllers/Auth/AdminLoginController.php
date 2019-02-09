<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request) {
        $this->validate($request, [
            'email ' => 'required|string',
            'password' => 'required|string',
        ]);

        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ]; 

        $AuthOK =  Auth::guard('admin')->attempt($credenciais, $request->remember);
        if($AuthOK) {
            // => intended -> se o carra digitou uma rota ao logar ele vai para a rota digitada
            // => senao ele vai para o dashboard do ADMIN
            return redirect()->intended(route('admin.dashboard'));
        }

        // Retorna para a Aba de login do ADMIN com o campo email e rememver preenchidos 
        return redirect()->back()->withInputs($request->only('email', 'remember'));

    }

    public function index() {
        return view('auth.login-admin');
    }

    //=> O guest verifica se o usuario é um convidado, se  for ele é redirecionado para login
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
}
