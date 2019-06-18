@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Reservations
            <small>View all reservations</small>
        </h1>
    </section>

    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Overview</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>User ID</th>
                        <th>Event ID</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    @foreach(\App\Reservation::all() as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->user_id }}</td>
                            <td>{{ $reservation->event_id }}</td>
                            <td>{{ $reservation->quantity }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.reservation.pdf', $reservation->id) }}">Print PDF</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </section>
@endsection
