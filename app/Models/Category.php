<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    /**
    * La table utilisée par le modèle
    *
    * @var string
    */
    protected $table = 'categories';

    /**
     * On utilise les dates de mise à jour
     *
     * @var bool
     */
    public $timestamps = true;  
    
    /**
     * Une catégorie appartient à plusieurs notes
     * 
     * @return type
     */
    public function notes() {
        return $this->hasMany('App\Models\Note', 'categorie_id');
    }
}
