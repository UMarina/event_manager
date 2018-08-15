<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps=false;
    
    protected $fillable=['name','lastname','email'];
    
    public function ticket()
  {
    return $this->belongsTo('App\Models\Ticket');
  }
    
     public function events()
    {
        return $this->belongsToMany('App\Models\Event');
    }
   
}
