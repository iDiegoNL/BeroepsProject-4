@extends('layouts.app')

@section('content')
    <section class="blog-post-wrap">
        <div class="container">
            <div class="row">
                @foreach(\App\Genre::all() as $genre)
                    <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="ui-block">
                            <article class="hentry blog-post has-post-thumbnail format-quote">
                                <div class="post-thumb">
                                    <div class="overlay"
                                         style="background-image: url('{{ route('welcome') }}/img/genre_covers/{{ $genre->cover_photo }}'); background-size: cover;">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('eventsearch.index', strtolower($genre->name)) }}"
                                           class="h2 post-title">{{ $genre->name }}</a>
                                        <div class="post__author author vcard">
                                            <a class="h6 post__author-name fn" href="#">View all available tickets</a>
                                            <div class="author-prof">10 tickets available</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach()

                @if(\App\Genre::all() == '[]')
                    <div class="ui-block">
                        <article class="hentry blog-post has-post-thumbnail format-link">

                            <div class="post-thumb bg-link">

                                <div class="overlay overlay-dark"></div>

                                <div class="post-content">
                                    <h4 class="post-title">There aren't any genres available right now. Please come back later.</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
