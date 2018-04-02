<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    
    /**
    * La table utilisée par le modèle
    *
    * @var string
    */
    protected $table = 'villes';

    /**
     * On utilise les dates de mise à jour
     *
     * @var bool
     */
    public $timestamps = true;  
    
}
