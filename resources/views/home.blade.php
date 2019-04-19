@extends('layouts.app')

@section('content')
    <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

        <div class="ui-block">

            <!-- News Feed Form  -->

            <div class="news-feed-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab"
                           aria-expanded="true">

                            <svg class="olymp-status-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-status-icon"></use>
                            </svg>

                            <span>Status</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab"
                           aria-expanded="false">

                            <svg class="olymp-multimedia-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use>
                            </svg>

                            <span>Multimedia</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab"
                           aria-expanded="false">
                            <svg class="olymp-blog-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-blog-icon"></use>
                            </svg>

                            <span>Blog Post</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="author-thumb">
                                <img src="img/author-page.jpg" alt="author">
                            </div>
                            <div class="form-group with-icon label-floating is-empty">
                                <label class="control-label" for="status">Share what you are thinking here...</label>
                                <textarea class="form-control" name="status" id="status" required></textarea>
                            </div>
                            <fieldset class="form-group">
                                <label for="userID">Select User</label>
                                <select class="form-control" id="userID" name="userID" required>
                                    <option value="{{ Auth::id() }}" selected>{{ Auth::user()->name }}</option>
                                    @foreach(App\User::where('name', 'like', 'test-'.'%')->get() as $testUser)
                                        <option value="{{ $testUser->id }}">{{ $testUser->name }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <div class="add-options-message">
                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="ADD PHOTOS">
                                    <svg class="olymp-camera-icon" data-toggle="modal"
                                         data-target="#update-header-photo">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-computer-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="ADD LOCATION">
                                    <svg class="olymp-small-pin-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use>
                                    </svg>
                                </a>

                                <button class="btn btn-primary btn-md-2">Post Status</button>
                                <button class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>

                            </div>

                        </form>
                    </div>

                    <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
                        <form>
                            <div class="author-thumb">
                                <img src="img/author-page.jpg" alt="author">
                            </div>
                            <div class="form-group with-icon label-floating is-empty">
                                <label class="control-label">Share what you are thinking here...</label>
                                <textarea class="form-control" placeholder=""></textarea>
                            </div>
                            <div class="add-options-message">
                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="ADD PHOTOS">
                                    <svg class="olymp-camera-icon" data-toggle="modal"
                                         data-target="#update-header-photo">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-computer-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="ADD LOCATION">
                                    <svg class="olymp-small-pin-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use>
                                    </svg>
                                </a>

                                <button class="btn btn-primary btn-md-2">Post Status</button>
                                <button class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>

                            </div>

                        </form>
                    </div>

                    <div class="tab-pane" id="blog" role="tabpanel" aria-expanded="true">
                        <form>
                            <div class="author-thumb">
                                <img src="img/author-page.jpg" alt="author">
                            </div>
                            <div class="form-group with-icon label-floating is-empty">
                                <label class="control-label">Share what you are thinking here...</label>
                                <textarea class="form-control" placeholder=""></textarea>
                            </div>
                            <div class="add-options-message">
                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="ADD PHOTOS">
                                    <svg class="olymp-camera-icon" data-toggle="modal"
                                         data-target="#update-header-photo">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-computer-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                   data-original-title="ADD LOCATION">
                                    <svg class="olymp-small-pin-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use>
                                    </svg>
                                </a>

                                <button class="btn btn-primary btn-md-2">Post Status</button>
                                <button class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- ... end News Feed Form  -->
        </div>

        <div id="newsfeed-items-grid">
            @foreach ($activities as $activity)
                <div class="ui-block">
                    <article class="hentry post video">

                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar7-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn"
                                   href="#">{{ \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('name') }}</a>
                                shared a
                                <a href="#">{{ strtolower($activity['type']) }}</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        {{ date('F j, Y', strtotime($activity['time'])) . ' at ' . date('g:i a', strtotime($activity['time'])) }}
                                    </time>
                                </div>
                            </div>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Edit Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Delete Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#">Select as Featured</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <p>{{ $activity['status'] }}</p>

                        <div class="post-additional-info inline-items">
                            <input type="hidden" name="post_id" id="post_id"
                                   value="{{ preg_replace('/\D/', '', $activity['object']) }}">
                            <input type="hidden" name="likeType" id="likeType" value="post">
                            <a href="{{ route('activity.like', ['type' => 'post', 'id' => preg_replace('/\D/', '', $activity['object'])]) }}"
                               class="post-add-icon inline-items"
                               @if (\App\Like::where('user_id', Auth::id())->where('post_id', preg_replace('/\D/', '', $activity['object']))->count() >= 1)style="fill: #ff5e3a;"@endif>
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                </svg>
                            </a>


                            <!-- TODO: Fix liked by people
                            <div class="names-people-likes">
                                <a href="#">Diego</a>, <a href="#">Robert</a> and
                                <br>18 more liked this
                            </div>
                            -->

                            @if (\App\Like::where('post_id', preg_replace('/\D/', '', $activity['object']))->count() > 0)
                                <ul class="friends-harmonic">
                                    <li>
                                        <a href="#">
                                            <img src="img/friend-harmonic9.jpg" alt="friend">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/friend-harmonic10.jpg" alt="friend">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/friend-harmonic7.jpg" alt="friend">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/friend-harmonic8.jpg" alt="friend">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/friend-harmonic11.jpg" alt="friend">
                                        </a>
                                    </li>
                                </ul>

                                <div class="names-people-likes">
                                    {{ \App\Like::where('post_id', preg_replace('/\D/', '', $activity['object']))->count() }}
                                    @if (\App\Like::where('post_id', preg_replace('/\D/', '', $activity['object']))->count() == 1) person thinks @else people think @endif this rocks!
                                </div>
                            @endif

                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
                                    </svg>

                                    <span>0</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                    </svg>

                                    <span>16</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="{{ route('activity.like', ['type' => 'post', 'id' => preg_replace('/\D/', '', $activity['object'])]) }}"
                               class="btn btn-control">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                </svg>
                            </a>

                        </div>

                    </article>
                </div>
            @endforeach
        </div>

        <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html"
           data-container="newsfeed-items-grid">
            <svg class="olymp-three-dots-icon">
                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
            </svg>
        </a>

    </main>
@endsection
