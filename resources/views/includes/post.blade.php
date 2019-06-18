<div class="ui-block">
    <article class="hentry post video">

        <div class="post__author author vcard inline-items">
            <a href="{{ route('profile.show', ['username' => \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username')]) }}">
                <img src="https://api.adorable.io/avatars/{{ \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username') }}.png"
                     alt="{{ \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username') }}">
            </a>

            <div class="author-date">
                <a class="h6 post__author-name fn"
                   href="{{ route('profile.show', ['username' => \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username')]) }}">
                    @if(\App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username') !== null)
                        {{ \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username') }}
                    @else Deleted User @endif
                </a>
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
                    <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}"></use>
                </svg>
                <ul class="more-dropdown">
                    @if (\App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username') == Auth::user()->username)
                        <li>
                            <a href="#">Edit Post</a>
                        </li>
                        <li>
                            <a href="#">Delete Post</a>
                        </li>
                    @endif
                    <li>
                        <a href="#">Share this post</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="#">Block {{ \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username') }}</a>
                    </li>
                    <li>
                        <a href="#">Report {{ \App\User::where('id', preg_replace('/\D/', '', $activity['actor']))->value('username') }}</a>
                    </li>
                    <li>
                        <a href="#">Report post</a>
                    </li>
                </ul>
            </div>

        </div>

        <p>{{ $activity['status'] }}</p>
        <p>
            <b>User ID: {{ preg_replace('/\D/', '', $activity['actor']) }}</b>
            <br>
            <b>Post ID: {{ preg_replace('/\D/', '', $activity['foreign_id']) }}</b>
        </p>

        <div class="post-additional-info inline-items">
            <input type="hidden" name="post_id" id="post_id"
                   value="{{ preg_replace('/\D/', '', $activity['object']) }}">
            <input type="hidden" name="likeType" id="likeType" value="post">
            <a href="{{ route('activity.like', ['type' => 'post', 'id' => preg_replace('/\D/', '', $activity['object'])]) }}"
               class="post-add-icon inline-items"
               @if (\App\Like::where('user_id', Auth::id())->where('post_id', preg_replace('/\D/', '', $activity['object']))->count() >= 1)style="fill: #ff5e3a;"@endif>
                <svg class="olymp-heart-icon">
                    <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-heart-icon') }}"></use>
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
                            <img src="{{ asset('https://api.adorable.io/avatars/friend9.png') }}" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('https://api.adorable.io/avatars/friend10.png') }}" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('https://api.adorable.io/avatars/friend11.png') }}" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('https://api.adorable.io/avatars/friend12.png') }}" alt="friend">
                        </a>
                    </li>
                </ul>

                <div class="names-people-likes">
                    {{ \App\Like::where('post_id', preg_replace('/\D/', '', $activity['object']))->count() }}
                    @if (\App\Like::where('post_id', preg_replace('/\D/', '', $activity['object']))->count() == 1)
                        person thinks @else people think @endif this rocks!
                </div>
            @endif

            <div class="comments-shared">
                <a href="#" class="post-add-icon inline-items">
                    <svg class="olymp-speech-balloon-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-speech-balloon-icon') }}"></use>
                    </svg>

                    <span>0</span>
                </a>

                <a href="#" class="post-add-icon inline-items">
                    <svg class="olymp-share-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-share-icon') }}"></use>
                    </svg>

                    <span>16</span>
                </a>
            </div>


        </div>

        <div class="control-block-button post-control-button">

            <a href="{{ route('activity.like', ['type' => 'post', 'id' => preg_replace('/\D/', '', $activity['object'])]) }}"
               class="btn btn-control">
                <svg class="olymp-like-post-icon">
                    <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-like-post-icon') }}"></use>
                </svg>
            </a>

            <a href="#" class="btn btn-control">
                <svg class="olymp-comments-post-icon">
                    <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-comments-post-icon') }}"></use>
                </svg>
            </a>

            <a href="#" class="btn btn-control">
                <svg class="olymp-share-icon">
                    <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-share-icon') }}"></use>
                </svg>
            </a>

        </div>

    </article>
</div>