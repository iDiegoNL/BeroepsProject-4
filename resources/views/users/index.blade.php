@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('user.follow') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="follow_id">Which user do you want to follow</label>
                        <select class="form-control" id="follow_id" name="follow_id" required>
                            @foreach(App\User::where('username', '!=', Auth::user()->username)->get() as $user)
                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Follow</button>
                </form>
                <br><br>
                <h3>Following:</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">User ID</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <!-- TODO: Fix not following -->
                <h3>TODO Not Following:</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">User ID</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
