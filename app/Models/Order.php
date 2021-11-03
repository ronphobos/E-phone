<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'prix_product',
        'remise_product',
        'quantite_product',
        'mode_payment',
        'adresse_user',
        'photo_product',
        'name_client',
        'email_client',
        'phone_client',
    ];
}
