@extends('layouts.app')

@section('content')
    <!-- Top Header-Profile -->
    @include('profile.includes.header')
    <!-- ... end Top Header-Profile -->
    <div class="container">
        <div class="row">

            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">{{ $username }}'s Friends ({{ count($friends) }})</div>
                        <form class="w-search">
                            <div class="form-group with-button is-empty">
                                <input class="form-control" type="text" placeholder="Search Friends...">
                                <button>
                                    <svg class="olymp-magnifying-glass-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use>
                                    </svg>
                                </button>
                                <span class="material-input"></span></div>
                        </form>
                        <a href="#" class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">

            @foreach($friends as $friend)
                <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="ui-block">

                        <!-- Friend Item -->

                        <div class="friend-item">
                            {{ $friend }}
                            <div class="friend-header-thumb">
                                <img src="https://images.unsplash.com/photo-1555102579-2457443e051c?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1920&h=640&fit=crop&ixid=eyJhcHBfaWQiOjF9"
                                     alt="friend">
                            </div>

                            <div class="friend-item-content">

                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Report Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">Block Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">Turn Off Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="friend-avatar">
                                    <div class="author-thumb">
                                        <img src="img/avatar1.jpg" alt="author">
                                    </div>
                                    <div class="author-content">
                                        <a href="#" class="h5 author-name">Nicholas Grissom</a>
                                        <div class="country">San Francisco, CA</div>
                                    </div>
                                </div>

                                <div class="swiper-container swiper-swiper-unique-id-0 initialized swiper-container-horizontal"
                                     data-slide="fade" id="swiper-unique-id-0">
                                    <div class="swiper-wrapper"
                                         style="width: 972px; transform: translate3d(-243px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next"
                                             data-swiper-slide-index="1" style="width: 243px;">
                                            <p class="friend-about" data-swiper-parallax="-500"
                                               style="transform: translate3d(-500px, 0px, 0px); transition-duration: 0ms;">
                                                Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and
                                                full-time mother.
                                            </p>

                                            <div class="friend-since" data-swiper-parallax="-100"
                                                 style="transform: translate3d(-100px, 0px, 0px); transition-duration: 0ms;">
                                                <span>Friends Since:</span>
                                                <div class="h6">December 2014</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                             style="width: 243px;">
                                            <div class="friend-count" data-swiper-parallax="-500"
                                                 style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">52</div>
                                                    <div class="title">Friends</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">240</div>
                                                    <div class="title">Photos</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">16</div>
                                                    <div class="title">Videos</div>
                                                </a>
                                            </div>
                                            <div class="control-block-button" data-swiper-parallax="-100"
                                                 style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                                <a href="#" class="btn btn-control bg-blue">
                                                    <svg class="olymp-happy-face-icon">
                                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                                                    </svg>
                                                </a>

                                                <a href="#" class="btn btn-control bg-purple">
                                                    <svg class="olymp-chat---messages-icon">
                                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev"
                                             data-swiper-slide-index="1" style="width: 243px;">
                                            <p class="friend-about" data-swiper-parallax="-500"
                                               style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                                                Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and
                                                full-time mother.
                                            </p>

                                            <div class="friend-since" data-swiper-parallax="-100"
                                                 style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;">
                                                <span>Friends Since:</span>
                                                <div class="h6">December 2014</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                             data-swiper-slide-index="0" style="width: 243px;">
                                            <div class="friend-count" data-swiper-parallax="-500"
                                                 style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">52</div>
                                                    <div class="title">Friends</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">240</div>
                                                    <div class="title">Photos</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">16</div>
                                                    <div class="title">Videos</div>
                                                </a>
                                            </div>
                                            <div class="control-block-button" data-swiper-parallax="-100"
                                                 style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;">
                                                <a href="#" class="btn btn-control bg-blue">
                                                    <svg class="olymp-happy-face-icon">
                                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                                                    </svg>
                                                </a>

                                                <a href="#" class="btn btn-control bg-purple">
                                                    <svg class="olymp-chat---messages-icon">
                                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination pagination-swiper-unique-id-0 swiper-pagination-clickable swiper-pagination-bullets">
                                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                                class="swiper-pagination-bullet"></span></div>
                                </div>
                            </div>
                        </div>

                        <!-- ... end Friend Item -->
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Window-popup Update Header Photo -->

    <div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo"
         aria-hidden="true">
        <div class="modal-dialog window-popup update-header-photo" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                    </svg>
                </a>

                <div class="modal-header">
                    <h6 class="title">Update Header Photo</h6>
                </div>

                <div class="modal-body">
                    <a href="#" class="upload-photo-item">
                        <svg class="olymp-computer-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use>
                        </svg>

                        <h6>Upload Photo</h6>
                        <span>Browse your computer.</span>
                    </a>

                    <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                        <svg class="olymp-photos-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use>
                        </svg>

                        <h6>Choose from My Photos</h6>
                        <span>Choose from your uploaded photos</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- ... end Window-popup Update Header Photo -->
@endsection
