<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	
	
	protected $fillable = ['nom','prenom'];
    protected $table = 'patients';

    use HasFactory;
	
	
}
