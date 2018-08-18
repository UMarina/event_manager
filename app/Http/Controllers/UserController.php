<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Event;


class UserController extends Controller
{
     public function createUser($event_id)
    {
        $tickets = Ticket::all();
        $events = Event::all();
        return view('users.create',[
            'events'=>$events,
            'tickets'=>$tickets,
            'current_event_id'=>$event_id
        ]);
    }
    
    public function store(Request $request)
    {
        $data=$request->all();
       
        $this->validate($request,[
             'name' => 'required|max:255',
             'lastname' => 'required|max:255',
             'email' => 'required|email|unique:users,email,NULL,id,event_id,'.$data['event_id'],
             'event_id' => 'required',
             'ticket_id' => 'required'
            
        ]);
        $event_id=$data['event_id'];
        User::create($data);
        return redirect()->route('events.show',[
            'id'=>$event_id
        ]);
    
    }
}
