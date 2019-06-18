<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="top-header">
                    <div class="top-header-thumb">
                        <img src="https://images.unsplash.com/photo-1555102579-2457443e051c?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1920&h=640&fit=crop&ixid=eyJhcHBfaWQiOjF9"
                             alt="nature">
                    </div>
                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="02-ProfilePage.html" class="active">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="05-ProfilePage-About.html">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.friends', ['username' => $username]) }}">Friends</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="07-ProfilePage-Photos.html">Photos</a>
                                    </li>
                                    <li>
                                        <a href="09-ProfilePage-Videos.html">Videos</a>
                                    </li>
                                    <li>
                                        <div class="more">
                                            <svg class="olymp-three-dots-icon">
                                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                            </svg>
                                            <ul class="more-dropdown more-with-triangle">
                                                <li>
                                                    <a href="#">Report Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">Block Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="control-block-button">
                            @if (\App\User::where('username', $username)->firstOrFail()->isFollowedBy(Auth::id()))
                                <a href="{{ route('user.unfollow', ['user' => \App\User::where('username', $username)->value('id')]) }}"
                                   class="btn btn-control bg-blue">
                                    yes
                                    <svg class="olymp-plus-icon">
                                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-plus-icon') }}"></use>
                                    </svg>
                                </a>
                            @else
                                <a href="{{ route('user.follow', ['user' => \App\User::where('username', $username)->value('id')]) }}"
                                   class="btn btn-control bg-blue">
                                    <svg class="olymp-plus-icon">
                                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-plus-icon') }}"></use>
                                    </svg>
                                </a>
                            @endif

                            <a href="#" class="btn btn-control bg-purple">
                                <svg class="olymp-chat---messages-icon">
                                    <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon') }}"></use>
                                </svg>
                            </a>

                            <div class="btn btn-control bg-primary more">
                                <svg class="olymp-settings-icon">
                                    <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-settings-icon') }}"></use>
                                </svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#update-header-photo">Update
                                            Header Photo</a>
                                    </li>
                                    <li>
                                        <a href="#">Message {{ $username }}</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="#">Block {{ $username }}</a>
                                    </li>
                                    <li>
                                        <a href="#">Report {{ $username }}</a>
                                    </li>
                                </ul>
                                <div class="ripple-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="top-header-author">
                        <img src="https://api.adorable.io/avatars/{{ $username }}.png" alt="author"
                             class="author-thumb">
                        <div class="author-content">
                            <a href="02-ProfilePage.html" class="h4 author-name">{{ $username }}</a>
                            <div>Amsterdam, The Netherlands</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>