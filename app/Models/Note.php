<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes;   
    
    /**
    * La table utilisée par le modèle
    *
    * @var string
    */
    protected $table = 'notes';
    
    protected $dates = ['deleted_at'];

    /**
     * On utilise les dates de mise à jour
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Relation 1:1
     * 
     * @return type
     */
    public function categorie()
    {
        return $this->belongsTo('App\Models\Category', 'categorie_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }    
    
}
