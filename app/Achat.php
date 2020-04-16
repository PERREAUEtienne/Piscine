<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    //
    protected $table = 'blog_achat'; // Nom de la table concernée par cette classe
	public $timestamps = false; // Désactive la gestion des colonnes created_at et updated_at
}
