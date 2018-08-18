@extends('layouts.app') @section('content')
<div class="container">

    <h1 class="h2 text-center page-header">{{$event->title}}</h1>

    <div class="table-responsive-md">
        <table class="table event-table table-striped table-sm">
           
            <thead>
                <tr>
                    <th>Registration Date</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Ticket</th>
                    <th>Price</th>
                    <th>Ticket Description</th>
                </tr>
            </thead>
            
            <tbody>
                @if ($users) @foreach($users as $user)
                <tr>
                    <td>{{ $user->created_at }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td><span>{{ $user->name }}</span> <span>{{ $user->lastname}}</span> </td>
                    <td>{{ $user->ticket->categoty }}</td>
                    <td>{{ $user->ticket->price }}$</td>
                    <td class="description-td">{{ $user->ticket->description }}</td>
                </tr>
                @endforeach @endif
            </tbody>
            
        </table>
    </div>
    <div class=" row">
        <div class="col-md-6 btn-div">
            <a href="{{ route('users.create',$event->id)}}" class="btn btn-lg btn-block btn-default">Add new user</a>
        </div>
        
        <div class="col-md-6 btn-div">
            <a href="{{ route('events')}}" class="btn btn-lg btn-block btn-default">  Close</a>
        </div>
    </div>
</div>

@endsection