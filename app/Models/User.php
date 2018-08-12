<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    public $timestamps=false;
    
    protected $guarded=[''];
    protected $fillable=['name','lastname','email','event_id','ticket_id','created_at'];
    
    public function ticket()
  {
    return $this->belongsTo('App\Models\Ticket');
  }
   
}
