<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = "ACCUEIL";
        return view('users.index', compact('title'));
    }
}
