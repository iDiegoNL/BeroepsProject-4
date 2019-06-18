@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ \App\Event::all()->count() }}</h3>

                        <p>Total Events</p>
                    </div>
                    <div class="icon">
                        <ion-icon name="calendar"></ion-icon>
                    </div>
                    <a href="#" class="small-box-footer">View all events <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ \App\Venue::all()->count() }}</h3>

                        <p>Venues</p>
                    </div>
                    <div class="icon">
                        <ion-icon name="pin"></ion-icon>
                    </div>
                    <a href="#" class="small-box-footer">View all venues <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ \App\Ticket::all()->count() }}</h3>

                        <p>Tickets sold</p>
                    </div>
                    <div class="icon">
                        <ion-icon name="barcode"></ion-icon>
                    </div>
                    <a href="#" class="small-box-footer">View all reservations
                        <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ \App\Band::all()->count() }}</h3>

                        <p>Bands Registered</p>
                    </div>
                    <div class="icon">
                        <ion-icon name="microphone"></ion-icon>
                    </div>
                    <a href="#" class="small-box-footer">View all bands <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

    </section>
@endsection
