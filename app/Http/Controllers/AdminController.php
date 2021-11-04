<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Message;
use App\Models\Order;
use App\Models\Produit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
     return $this->middleware('auth');
    }

    public function index()
    {
        $title = "ADMINISTRATEUR";
        $produits = Produit::get();
        $categories = Categorie::get();
        $charts = DB::table('produits')->get('*')->toArray();
        // $data[] ="";
        foreach($charts as $row)
        {
            $data[] = array
            (
                'label' => $row->name,
                'y' => $row->id,
            );
        }
        // dd($data);
        return view('admin.index', compact("title","produits","categories","data"));
    }

    public function table()
    {
        $title = "TOUS LES PRODUITS";
        $produits = Produit::get();
        $categories = Categorie::get();
        $admins = Admin::get();
        $messages = Message::get();
        $commandes = Order::get();
        $users = User::get();
        $admins = User::where('user_type','ADM')->get();
        Carbon::setLocale('fr');
        return view('admin.table', compact("title","produits","categories","admins","messages","commandes","users", "admins"));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
