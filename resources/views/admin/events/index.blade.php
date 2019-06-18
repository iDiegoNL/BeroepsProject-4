@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Events
            <small>View all events</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Overview</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <a class="btn btn-primary btn-xs" href="{{ route('admin.events.add') }}">New Event</a>
                </div>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Public Start Date</th>
                        <th>Tickets Available</th>
                        <th>Action</th>
                    </tr>
                    @foreach(\App\Event::all() as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->name }}</td>
                            <td>&dollar; {{ $event->public_price }}</td>
                            <td>
                                {{ \Carbon\Carbon::create($event->start_date)->format('l jS \\of F Y') }}
                                @
                                {{ \Carbon\Carbon::create($event->start_date)->format('h:i A') }}
                            </td>
                            <td>{{ \App\Venue::find($event->venue_id)->value('capacity') - \App\Ticket::where('event_id', $event->id)->count() }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.event.edit', $event->id) }}">Edit</a>
                                <a class="btn btn-danger"
                                   href="{{ route('admin.event.delete', $event->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </section>
@endsection
