<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        $title = "CONNEXION";
        return view('auth.login', compact('title'));
    }

    public function dologin(Request $request)
    {
        // VALIDER LE FORMULAIRE
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        // VERIFIER LA CONNEXION
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->with('erreur', 'Emai/Mot de passe incorrecte');
        }

        if (auth()->user()->user_type === 'ADM') {
        return redirect()->route('produit.create');
        }else{
            return redirect()->route('user.index')->with('message', 'Vous êtes bien connecté!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message', 'Déconnexion réussie!');
    }
}
