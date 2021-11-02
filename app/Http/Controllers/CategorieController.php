<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "TOUTES LES CATEGORIES";
        $categories = Categorie::get();
        return view('admin.categorie.index', compact("title","categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $title = "CREATION DE CATEGORIE";
        $categories = Categorie::get();
        return view('admin.categorie.create', compact("title","categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALIDATION
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        // INSERTION DES DONNEES DANS LA BASE DE DONNEES
        Categorie::create([
            'name' => $request->name,
        ]);

        //REDIRECTION
        return redirect()->back()->with('message', 'Catégorie ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $id)
    {
        //

        $categorie = Categorie::findOrFail($id);
        // return redirect()->route();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $id)
    {
        $title = "MODIFICATION CATEGORIE";
        $categories = Categorie::get();
        return view('admin.categorie.edit', compact('id', 'categories', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        Categorie::update([
            'name' => $request->name,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $id)
    {
        //
        $id->delete();
        return redirect()->back()->with('message', 'Catégorie supprimée avec succès!');
    }
}
