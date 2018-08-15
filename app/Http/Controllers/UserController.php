<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Event;
use App\Models\UserEventTicket;

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
        $data=$request->except(['_token']);
        $this->validate($request,[
             'name' => 'required|max:255',
             'lastname' => 'required|max:255',
             'email'=> 'required|email'
             
        ]);
        $event_id=$data['event_id'];
        $user=User::firstOrCreate([
            'email'=> $data['email']
        ], [
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            ]);
        UserEventTicket::create([
            'user_id' => $user->id,
            'event_id' => $data['event_id'],
            'ticket_id' => $data['ticket_id']
        ]);
        return redirect()->route('events.show',[
            'id'=>$event_id
        ]);
    
    }
}
