@extends('layouts.app')

@section('content')
    <!-- Main Header Music -->

    <div class="main-header">
        <div class="content-bg-wrap"
             style="background-image: url('{{ asset($event->cover_photo) }}'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1 style="word-wrap: break-word;">You're almost going to {{ $event->name }}!</h1>
                        <h3>
                            <strong>Please confirm the following details.</strong>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Main Header Music -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Personal Information</h6>
                    </div>
                    <div class="ui-block-content">

                        <form>
                            <div class="row">
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <input class="form-control" placeholder="First Name" type="text"
                                               name="first_name" value="{{ Auth::user()->first_name }}" required
                                               disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input class="form-control" placeholder="Your Email" type="email" name="email"
                                               value="{{ Auth::user()->email }}" required disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Address</label>
                                        <input class="form-control" placeholder="Your Address" type="text"
                                               name="address"
                                               value="{{ Auth::user()->address }}" required disabled="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input class="form-control" placeholder="Your Last Name" type="text"
                                               name="last_name" value="{{ Auth::user()->last_name }}" required
                                               disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone Number</label>
                                        <input class="form-control" placeholder="Your Phone Number" type="text"
                                               name="phone_number" value="{{ Auth::user()->phone_number }}" required
                                               disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Country</label>
                                        <input class="form-control" placeholder="Your Country of Residence" type="text"
                                               name="phone_number" value="{{ Auth::user()->country }}" required
                                               disabled="">
                                        <span class="material-input"></span></div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Event Info</h6>
                    </div>
                    <div class="ui-block-content">

                        <form>
                            <div class="row">
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input class="form-control" value="{{ $event->name }}" disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Starting Date</label>
                                        <input class="form-control" value="{{ \Carbon\Carbon::create($event->start_date)->format('l jS \\of F Y') }}" disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Ticket Quantity</label>
                                        <input class="form-control" value="1" disabled="">
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Venue</label>
                                        <input class="form-control" value="{{ $venue->name }}" disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Starting Time</label>
                                        <input class="form-control" value=" {{ \Carbon\Carbon::create($event->start_date)->format('h:i A') }}" disabled="">
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Total Price</label>
                                        <input class="form-control" placeholder="Your Country of Residence" type="text"
                                               name="phone_number" value="&dollar; {{ $event->public_price }}" required
                                               disabled="">
                                        <span class="material-input"></span></div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <a class="btn btn-grey btn-lg full-width text-white" href="{{ route('reservations.checkout', $venue->id) }}">Go Back!</a>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <a class="btn btn-primary btn-lg full-width text-white" href="{{ route('reservations.store', $venue->id) }}">Complete Reservation!</a>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
