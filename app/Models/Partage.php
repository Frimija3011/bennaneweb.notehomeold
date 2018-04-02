<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partage extends Model
{
    use SoftDeletes;
    
    protected $table = 'partages';
    
    protected $dates = ['deleted_at'];
    
    public $timestamps = true;
    
}
