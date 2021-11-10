<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $title = "TOUS LES PRODUITS";
        $produits = Produit::get();
        $categories = Categorie::get();
        return view('admin.product.index', compact("title","produits","categories"));
    }

    public function search(Request $request)
    {
        if($request->ajax()){
            $data = Produit::where('name','like','%'.$request->search.'%')
            ->orwhere('category','like','%'.$request->search.'%')->get();

        $text = '';
        if(count($data)>0){

            $text = '
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>';

                    foreach($data as $row){
                        $text .='
                        <tr>
                        <td scope="row">'.$row->name.'</td>
                        <td scope="row">'.$row->category.'</td>
                        </tr>
                        ';
                    }

            $text .=
            '</tbody>
            </table>';

        }else{
            $text = 'Pas de résultat!';
        }
        }
        return $text;
    }

    public function produit()
    {
        $title = "TOUS LES PRODUITS";
        $produits = Produit::get();
        return view('users.produits', compact('title','produits'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $title = "CREER UN PRODUIT";
        $produits = Produit::get();
        $categories = Categorie::get();
        return view('admin.product.create', compact("title","produits","categories"));
    }

    public function modifie()
    {
        //

        $title = "MODIFIE UN PRODUIT";
        $produits = Produit::get();
        $categories = Categorie::get();
        return view('admin.product.edit', compact("title","produits","categories"));
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
            'price' => 'required|max:10',
            'description' => 'required|max:255',
            'category' => 'required|max:255',
            'photo' => ['required', 'image'],
            'mot_cle' => 'required|max:255',
        ]);

        $path= request('photo')->store('img','public');

        // INSERTION DES DONNEES DANS LA BASE DE DONNEES
        Produit::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'photo' => $path,
            'mot_cle' => $request->mot_cle,
        ]);

        // $findCat_id = Categorie::where('name', $request->category)->get('id');


        // $produit = new Produit();

        // $produit->name = $request->name;
        // $produit->price = $request->price;
        // $produit->description = $request->description;
        // $produit->category = $request->category;
        // $produit->photo = $path;
        // $produit->mot_cle = $request->mot_cle;
        // // $produit->category_id = $findCat_id->id;
        // $produit->save();

        //REDIRECTION
        return redirect()->back()->with('message', 'Produit ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $id)
    {
        $title = "DETAIL DU PRODUIT";
        $users = User::get();
        return view('users.produit_detail', compact('title','id', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $id)
    {
        //
        $title = "MODIFICATION PRODUIT";
        $categories = Categorie::get();
        return view('admin.product.edit', compact('id', 'categories', 'title'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $id)
    {
         // VALIDATION
         $donnees = $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|max:10',
            'description' => 'required|max:255',
            'category' => 'required|max:255',
            'photo' => '',
            'mot_cle' => 'required|max:255',
        ]);

        if (request('photo')) {
            $path= request('photo')->store('img','public');

            $imageArray = ['photo'=>$path];
        }

        Produit::update(array_merge(
            $donnees,
            $imageArray ?? [],
        ));

        return redirect()->route('produit.index')->with('message', 'Le produit '.$request->name.' a bien été mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $id)
    {
        //
       $id->delete();
        return redirect()->back()->with('message', 'produit supprimé avec succès');
    }
}
