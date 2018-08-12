<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $table='tickets';
     public $timestamps=false;
    
    protected $guarded=[''];
    protected $fillable=['category','description','price'];
    
}
