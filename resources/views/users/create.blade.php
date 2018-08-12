@extends('layouts.app') @section('content')

<div class="container">
    <h1 class="h2 text-center page-header">Create New User</h1>

    <form class="add-user" method="POST" action="{{ route('users.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}"> @if ($errors->has('name'))
            <span class="text-danger"><strong>{{ $errors->first('name') }}</strong></span> @endif
        </div>
        <div class="form-group">
            <label for="lastname">LastName</label>
            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="LastName" value="{{ old('lastname') }}"> @if ($errors->has('lastname'))
            <span class="text-danger"><strong>{{ $errors->first('lastname') }}</strong></span> @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}"> @if ($errors->has('email'))
            <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span> @endif
        </div>
        <div class="form-group">
            <label for="event">Event</label><br>
            <select class="form-control" name="event_id" id="event" value="{{ old('event_id') }}">
             @foreach ($events as $event)
             <option {{ ($current_event_id ==$event->id)? 'selected' : '' }} value="{{ $event->id }}"  >
                 {{ $event->title }}
             </option>
             @endforeach; 
         </select>
        </div>
        <div class="form-group row">
            @foreach ($tickets as $ticket)
            <div class="col-md-4 col-sm-6">
                <input class="form-check-input" type="radio" {{$ticket->category=='free'? 'checked':''}} name="ticket_id" id="ticket{{$ticket->id}}" value="{{$ticket->id}}">

                <div class="card ticket-card text-center">
                    <div class="card-header">
                        <h4 class=" text-uppercase">{{$ticket->category}}</h4>
                        <div class="price">
                            <h3>{{$ticket->price}}$</h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="card-text">{{$ticket->description}}</p>

                    </div>
                    <div class="card-footer text-muted">

                        <label class="btn btn-info " type="button" for="ticket{{$ticket->id}}">Select</label>

                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <div class=" row form-group">
            {{ csrf_field() }}
            <div class="col-md-6 btn-div"><button type="submit" class="btn btn-lg btn-block btn-default">Save</button></div>
            <div class="col-md-6 btn-div"><a href="{{ route('events')}}" class="btn btn-lg btn-block btn-default">Close</a></div>

        </div>
    </form>
</div>
@endsection