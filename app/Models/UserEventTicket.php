<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserEventTicket extends Model
{ 
    protected $table= 'user_event_ticket';
    public $timestamps=false;
    
    protected $fillable=['user_id','event_id','ticket_id'];
       public static function getUsersForEventWithTicket($id)
    {
        $users = DB::table('user_event_ticket')
            ->where('event_id', $id)
            ->join('users', 'user_event_ticket.user_id', '=', 'users.id')
            ->join('tickets', 'tickets.id', '=', 'user_event_ticket.ticket_id')
            ->select('users.*', 'tickets.category as ticket','tickets.description as t_description','tickets.price as t_price','user_event_ticket.created_at')
            ->oldest()
            ->get();
        
        return ($users);
    }
    
}
