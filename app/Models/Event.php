<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $table='events';
     public $timestamps=false;
    
    protected $guarded=[''];
    protected $fillable=['title','date_start','time_start'];
    
     public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
