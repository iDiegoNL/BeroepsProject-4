@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>New Post</h1>
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="userID">Which User</label>
                        <select class="form-control" id="userID" name="userID" required>
                            <option value="{{ Auth::id() }}" selected>{{ Auth::user()->username }}</option>
                            @foreach(App\User::where('username', 'like', 'test-'.'%')->get() as $testUser)
                                <option value="{{ $testUser->id }}">{{ $testUser->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <textarea class="form-control" id="status" name="status" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Status</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User ID</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts = \App\Post::paginate(5) as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->status }}</td>
                            <td>{{ \App\User::where('id', $post->user_id)->value('username') }}</td>
                            <td>{{ $post->user_id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
                <br>
                <a class="btn btn-danger" href="{{ route('posts.drop') }}">Delete all posts</a>
                <br><br>
                <h1>Test Users</h1>
                <h5>The password for all test users is <kbd>test123</kbd></h5>
                <h6>Want to generate test users? Use the command <code>php artisan generate:users</code></h6>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($testUsers = App\User::where('username', 'like', 'test-'.'%')->paginate(5) as $testUser)
                        <tr>
                            <th scope="row">{{ $testUser->id }}</th>
                            <td><samp>{{ $testUser->username }}</samp></td>
                            <td>{{ $testUser->email }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $testUsers->links() }}
                <br>
                <a class="btn btn-danger" href="{{ route('testusers.prune') }}">Delete all test users</a>
                <hr>
                <a class="btn btn-danger" href="{{ route('users.drop') }}">!!!!!! Delete all users !!!!!!</a>
            </div>
        </div>
    </div>
@endsection
