<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
        'photo',
        'mot_cle',
    ];

    public function ImageDefautProduit()
    {
        $pathImage = ($this->image) ? $this->image : 'img/uLqs1Av838DtTJoVzf3kfxCMxqv6bCIWX1uYDtwV.png';
        return '/storage/'. $pathImage;
    }

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
