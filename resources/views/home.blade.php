@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
                <br>
                <h1>New Post</h1>
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
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
                        <th scope="col">User ID</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Post::all() as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->user_id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <a class="btn btn-danger" href="{{ route('posts.drop') }}">Delete all posts</a>
            </div>
        </div>
    </div>
@endsection
