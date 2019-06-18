@extends('layouts.app')

@section('content')
    <section class="blog-post-wrap">
        <div class="container">
            <div class="row">
                @foreach(\App\Event::all() as $event)
                    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="ui-block">
                            <article class="hentry blog-post blog-post-v1">

                                <div class="post-thumb">
                                    <img src="{{ asset($event->cover_photo) }}" alt="{{ $event->name }}">

                                    <div class="post-content">
                                        <span class="post-category bg-primary">BandWalk Exclusive</span>
                                        <a href="{{ route('eventsearch.show', [$event->name, $event->id]) }}"
                                           class="h4 post-title">{{ $event->name }}</a>

                                        <div class="author-date" style="text-transform: none;">
                                            With
                                            @foreach(json_decode($event->attendees, true) as $attendee)
                                                <a href="{{ route('eventsearch.show', [$event->name, $event->id]) }}"
                                                   class="h6 post__author-name fn">
                                                    {{ \App\Band::find($attendee)->value('name') }}
                                                </a>
                                            @endforeach
                                        </div>
                                        <br>
                                        <div class="author-date" style="text-transform: none;">
                                            <span class="h6 post__author-name fn">{{\Carbon\Carbon::create($event->start_date)->format('l jS \\of F Y') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-additional-info inline-items">

                                    <div>
                                        {{ \Carbon\Carbon::create($event->start_date)->format('l jS \\of F Y') }}
                                    </div>

                                    <div class="comments-shared">
                                        &dollar;{{ $event->public_price }}
                                    </div>

                                </div>
                                <div class="post-additional-info">
                                    <div>
                                        <i style="color: #ff5e3a;" class="fas fa-map-marker-alt"></i>
                                        <a href="{{ route('venues.show', [strtolower(\App\Venue::find($event->venue_id)->value('name')), $event->venue_id]) }}"
                                           style="color: #888da8;">{{ \App\Venue::find($event->venue_id)->value('name') }}</a>
                                    </div>
                                    <div></div>
                                </div>

                            </article>
                        </div>
                    </div>
                @endforeach
            </div>


            <!-- Pagination -->

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1
                            <div class="ripple-container">
                                <div class="ripple ripple-on ripple-out"
                                     style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div>
                            </div>
                        </a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

            <!-- ... end Pagination -->
        </div>
    </section>
@endsection
