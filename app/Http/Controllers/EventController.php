<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

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
        $users=$event->users;
        return view('events.event',[
            'users'=>$users,
            'event'=>$event
        ]);
    
    }
}

