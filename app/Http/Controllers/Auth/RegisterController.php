<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $title = "INSCRIPTION";
        return view('auth.register', compact('title'));
    }

    public function doregister(Request $request)
    {
        // VALIDER LE FORMULAIRE
        $this->validate($request, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:10',
            'password' => 'required',
        ]);

        // VERIFIER LA CONNEXION
        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // FAIRE LA CONNEXION
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // REDIRECTION
        return redirect()->route('user.index')->with('message', 'Vous êtes bien connecté!');
    }
}
