@extends('layouts.app')

@section('content')
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
                  <td>{{ $event->date_start }} <br>
                      start: {{ substr($event->time_start,0,-3) }}
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