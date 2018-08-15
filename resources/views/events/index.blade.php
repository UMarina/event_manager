@extends('layouts.app') @section('content')
<div class="container">
   
    <h1 class="h2 text-center page-header">Events list</h1>

    <div class="table-responsive-md">
       
        <table class="table table-striped table-sm">
           
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Members</th>
                    <th>Add User</th>
                </tr>
            </thead>
            
            <tbody>
                @if ($events) 
                    @foreach($events as $event)
                        <tr>
                            <td>{{explode(' ',$event->date_time_start)[0]  }} <br> start: {{ substr(explode(' ',$event->date_time_start)[1],0,-3) }}
                            </td>
                            <td>{{ $event->title }}</td>
                            <td> <a href="{{ route('events.show',$event->id)}}" class="btn btn-info">Show</a> </td>
                            <td><a href="{{ route('users.create',$event->id)}}" class="btn btn-info">Add</a></td>
                        </tr>
                    @endforeach 
                @endif
            </tbody>
            
        </table>
        
    </div>
</div>

@endsection