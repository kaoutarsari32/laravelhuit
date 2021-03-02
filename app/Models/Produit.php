<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
	
	
	protected $fillable = ['nom','prenom', 'image'];
    protected $table = 'produits';

    use HasFactory;
  
}
