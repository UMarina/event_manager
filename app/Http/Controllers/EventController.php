<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\UserEventTicket;

class EventController extends Controller
{
     public function index()
    {
        $events=Event::all();
        return view('events.index',[
            'events'=>$events
        ]);
    }
    public function showEvent($id)
    { 
        $event=Event::find($id);
        $users=UserEventTicket::getUsersForEventWithTicket($id);
       
        return view('events.event',[
            'users'=>$users,
            'event'=>$event
        ]);
    
    }
}

