@extends('layouts.app')

@section('content')
    <!-- Top Header-Profile -->
    @include('profile.includes.header')
    <!-- ... end Top Header-Profile -->
    <div class="container">
        <div class="row">

            <!-- Main Content -->

            <div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                <div id="newsfeed-items-grid">

                    @foreach ($activities as $activity)
                        @include('includes.post')
                    @endforeach

                </div>

                <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html"
                   data-container="newsfeed-items-grid">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}"></use>
                    </svg>
                </a>
            </div>

            <!-- ... end Main Content -->


            <!-- Left Sidebar -->

            <div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">About Me</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Personal-Info -->

                        <ul class="widget w-personal-info item-block">
                            <li>
                                <span class="title">About Me:</span>
                                <span class="text">
                                    Placeholder
                                </span>
                            </li>
                            <li>
                                <span class="title">Favourite Bands / Artists:</span>
                                <span class="text">
                                    Placeholder
                                </span>
                            </li>
                            <li>
                                <span class="title">Upcoming Concerts:</span>
                                <span class="text">
                                    Placeholder
                                </span>
                            </li>
                        </ul>

                        <!-- .. end W-Personal-Info -->
                        <!-- W-Socials -->

                        <div class="widget w-socials">
                            <h6 class="title">Connected Accounts:</h6>
                            <a href="#" class="social-item bg-spotify">
                                <i class="fab fa-spotify" aria-hidden="true"></i>
                                Spotify
                            </a>
                            <a href="#" class="social-item bg-soundcloud">
                                <i class="fab fa-soundcloud" aria-hidden="true"></i>
                                SoundCloud
                            </a>
                        </div>


                        <!-- ... end W-Socials -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Earned Badges</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Badges -->

                        <ul class="widget w-badges">
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge1.png" alt="author">
                                    <div class="label-avatar bg-primary">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge4.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge3.png" alt="author">
                                    <div class="label-avatar bg-blue">4</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge6.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge11.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge8.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge10.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge13.png" alt="author">
                                    <div class="label-avatar bg-breez">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge7.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="img/badge12.png" alt="author">
                                </a>
                            </li>
                        </ul>

                        <!--.. end W-Badges -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Featured Spotify Playlist</h6>
                    </div>

                    <!-- W-Playlist -->

                    <ol class="widget w-playlist">
                        <iframe src="https://open.spotify.com/embed/album/1DFixLWuPkv3KT3TnV35m3" width="300"
                                height="380" frameborder="0" allowtransparency="true" allow="encrypted-media">
                        </iframe>
                    </ol>

                    <!-- .. end W-Playlist -->
                </div>
            </div>

            <!-- ... end Left Sidebar -->


            <!-- Right Sidebar -->

            <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Blog Posts</h6>
                    </div>
                    <!-- W-Blog-Posts -->

                    <ul class="widget w-blog-posts">
                        <li>
                            <article class="hentry post">

                                <a href="#" class="h4">My Perfect Vacations in South America and Europe</a>

                                <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut
                                    labore et.</p>

                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        7 hours ago
                                    </time>
                                </div>

                            </article>
                        </li>
                        <li>
                            <article class="hentry post">

                                <a href="#" class="h4">The Big Experience of Travelling Alone</a>

                                <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut
                                    labore et.</p>

                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        March 18th, at 6:52pm
                                    </time>
                                </div>

                            </article>
                        </li>
                    </ul>

                    <!-- .. end W-Blog-Posts -->
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Friends (86)</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Faved-Page -->

                        <ul class="widget w-faved-page js-zoom-gallery">
                            <li>
                                <a href="#">
                                    <img src="img/avatar38-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar24-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar36-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar35-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar34-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar33-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar32-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar31-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar30-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar29-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar28-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar27-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar26-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatar25-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li class="all-users">
                                <a href="#">+74</a>
                            </li>
                        </ul>

                        <!-- .. end W-Faved-Page -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Favourite Pages</h6>
                    </div>

                    <!-- W-Friend-Pages-Added -->

                    <ul class="widget w-friend-pages-added notification-list friend-requests">
                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="img/avatar41-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">The Marina Bar</a>
                                <span class="chat-message-item">Restaurant / Bar</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                                  data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use
                                            xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="img/avatar42-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Tapronus Rock</a>
                                <span class="chat-message-item">Rock Band</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                                  data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use
                                            xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="img/avatar43-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Pixel Digital Design</a>
                                <span class="chat-message-item">Company</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                                  data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use
                                            xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="img/avatar44-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
                                <span class="chat-message-item">Clothing Store</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                                  data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use
                                            xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="img/avatar45-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Crimson Agency</a>
                                <span class="chat-message-item">Company</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                                  data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use
                                            xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="img/avatar46-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Mannequin Angel</a>
                                <span class="chat-message-item">Clothing Store</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top"
                                  data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use
                                            xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
                        </li>
                    </ul>

                    <!-- .. end W-Friend-Pages-Added -->
                </div>

            </div>

            <!-- ... end Right Sidebar -->

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
