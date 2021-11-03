<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $title = "ACCUEIL";
        $produits = Produit::get();
        $produits_page = Produit::paginate(4);
        return view('users.index', compact('title', 'produits','produits_page'));
    }

    public function a_propos()
    {
        $title = "A PROPOS DE NOUS";
        return view('users.a_propos', compact('title'));
    }

    public function contact()
    {
        $title = "CONTACT";
        $users = User::get();
        return view('users.contact', compact('title', 'users'));
    }

    public function termes()
    {
        $title = "TERMES ET CONDITIONS";
        return view('users.termes', compact('title'));
    }

    public function faq()
    {
        $title = "FOIRE AUX QUESTIONS";
        return view('users.faq', compact('title'));
    }
}
