@extends('layouts.app')

@section('content')
    <section class="blog-post-wrap">
        <div class="container">
            <div class="row">
                @foreach($reservations as $reservation)
                    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="ui-block">
                            <article class="hentry blog-post blog-post-v1">

                                <div class="post-thumb">
                                    <img src="{{ asset(\App\Event::find($reservation->event_id)->value('cover_photo')) }}" alt="{{ $reservation->name }}">

                                    <div class="post-content">
                                        <a href="{{ route('eventsearch.show', [$reservation->name, $reservation->id]) }}"
                                           class="h4 post-title">{{ \App\Event::find($reservation->event_id)->value('name') }}</a>

                                        <div class="author-date" style="text-transform: none;">
                                            With
                                            <a href="{{ route('eventsearch.show', [$reservation->name, $reservation->id]) }}"
                                               class="h6 post__author-name fn">
                                                Twenty One Pilots, Panic at The Disco and 5 more
                                            </a>
                                        </div>
                                        <br>
                                        <div class="author-date" style="text-transform: none;">
                                            <span class="h6 post__author-name fn">{{\Carbon\Carbon::create($reservation->start_date)->format('l jS \\of F Y') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-additional-info inline-items">

                                    <div>
                                        {{ \Carbon\Carbon::create($reservation->start_date)->format('l jS \\of F Y') }}
                                    </div>

                                    <div class="comments-shared">
                                        &dollar;{{ $reservation->public_price }}
                                    </div>

                                </div>
                                <div class="post-additional-info">
                                    <div>
                                        <i style="color: #ff5e3a;" class="fas fa-map-marker-alt"></i>

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
