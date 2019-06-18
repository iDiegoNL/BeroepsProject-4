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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('reservations.confirm', $event->id) }}">
                            <div class="row">
                                @csrf
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <input class="form-control" placeholder="First Name" type="text"
                                               name="first_name" value="{{ Auth::user()->first_name }}" required
                                               autofocus>
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone Number</label>
                                        <input class="form-control" placeholder="Your Phone Number" type="text"
                                               name="phone_number" value="{{ Auth::user()->phone_number }}" required>
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Address</label>
                                        <input class="form-control" placeholder="Your Address" type="text"
                                               name="address"
                                               value="{{ Auth::user()->address }}" required>
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input class="form-control" placeholder="Your Last Name" type="text"
                                               name="last_name" value="{{ Auth::user()->last_name }}" required>
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Country</label>
                                        <input class="form-control" placeholder="Your Country of Residence" type="text"
                                               name="country" value="{{ Auth::user()->country }}" required>
                                        <span class="material-input"></span></div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-lg full-width" type="submit">Continue</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
