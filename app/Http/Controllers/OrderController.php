<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "PAIEMENT";
        return view('order.order', compact('title'));
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

         // VALIDATION
        $donne = $this->validate($request, [
            'name_product' => 'required|max:255',
            'prix_product' => 'required|max:10',
            'remise_product' => 'required|max:10',
            'quantite_product' => 'required|max:10',
            'mode_payment' => 'required|max:255',
            'adresse_user' => 'required|max:255',
            'photo_product' => '',
            'name_client' => '',
            'email_client'  => '',
            'number_client'  => '',
        ]);

        // INSERTION DES DONNEES DANS LA BASE DE DONNEES
        Order::create([
            'name_product' => $request->name_product,
            'prix_product' => $request->prix_product,
            'remise_product' => $request->remise_product,
            'quantite_product' => $request->quantite_product,
            'mode_payment' => $request->mode_payment,
            'adresse_user' => $request->adresse_user,
            'photo_product' => $request->photo_product,
            'name_client' => $request->name_client,
            'email_client' => $request->email_client,
            'phone_client' => $request->number_client,
        ]);

        if ($request->mode_payment == 'mtn') {
            return redirect()->route('order.index');
        }
        return redirect()->route('user.index')->with('message', 'Votre commande est validé, la date de livraison est :'.now());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $id)
    {
        //
        $id->delete();
        return redirect()->back()->with('message', 'la commande a bien été supprimé');
    }
}
