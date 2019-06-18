@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt50">
            <div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">

                    <article class="hentry blog-post single-post single-post-v2">

                        <a href="#" class="post-category bg-primary">THE COMMUNITY</a>
                        <h2 class="h1 post-title">{{ $event->name }}</h2>

                        <div class="single-post-additional inline-items">
                            <div class="post__author author vcard inline-items">
                                <img alt="author" src="{{ asset('img/' .$venue->cover_photo) }}" class="avatar">
                                <div class="author-date not-uppercase">
                                    <a class="h6 post__author-name fn"
                                       href="{{ route('venues.show', [$venue->name, $venue->id]) }}">{{ $venue->name }}</a>
                                    <div class="author_prof">
                                        Venue
                                    </div>
                                </div>
                            </div>
                            <div class="post-date-wrap inline-items">
                                <i class="far fa-clock fa-10x" aria-hidden="true" style="font-size: 20px;"></i>
                                <div class="post-date">
                                    <span class="h6 date">
                                        {{ \Carbon\Carbon::create($event->start_date)->format('l jS \\of F Y') }} @
                                        <b>{{ \Carbon\Carbon::create($event->start_date)->format('h:i A') }}</b>
                                    </span>
                                    <span>Date</span>
                                </div>
                            </div>
                            <div class="post-comments-wrap inline-items">
                                <i class="far fa-users-class fa-10x" aria-hidden="true" style="font-size: 20px;"></i>
                                <div class="post-comments">
                                    <span class="h6 capacity" href="#">{{ $venue->capacity  }}</span>
                                    <span>Capacity</span>
                                </div>
                            </div>
                        </div>

                        <div class="post-thumb">
                            <img src="{{ asset($event->cover_photo) }}" alt="author">
                        </div>


                        <div class="post-content-wrap">

                            <div class="post-content">
                                {!! $event->info !!}
                            </div>
                        </div>

                    </article>
                </div>

                <div class="ui-block">

                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">AVAILABLE TICKETS</h6>
                    </div>

                    @if($ticketsAvailable >= 0)
                        <table class="event-item-table">
                            <tbody>
                            <tr class="event-item">

                                <td class="upcoming">
                                    <div class="date-event">

                                        <i class="fas fa-dollar-sign"></i>

                                        <span class="price">{{ $event->public_price }}</span>
                                    </div>
                                </td>
                                <td class="author">
                                    <div class="event-author inline-items">
                                        <div class="author-date">
                                            <a href="#" class="author-name h6">General Admission</a>
                                            <br>
                                            <small>Max {{ $event->max_order_quantity }} tickets per account</small>
                                            <br>
                                            <small>{{ $ticketsAvailable }} tickets available</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="location">
                                    <div class="place inline-items">

                                        <i style="color: #ff5e3a;" class="fas fa-map-marker-alt"></i>
                                        <a href="{{ route('venues.show', [$venue->name, $venue->id]) }}"
                                           style="color: #888da8;"><span>{{ $venue->name }}</span></a>
                                    </div>
                                </td>
                                <td class="description">
                                    <p class="description">Doors open at 10:30AM</p>
                                </td>
                                <td class="add-event">
                                    <a href="{{ route('reservations.checkout', $event->id) }}"
                                       class="btn btn-breez btn-sm">Buy Ticket</a>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    @else
                        <div class="no-past-events">
                            <i class="fal fa-calendar-exclamation fa-10x"></i>
                            <span>No tickets available at this time</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
