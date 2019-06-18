@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small>View all users</small>
        </h1>
    </section>

    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Overview</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Admin</th>
                        <th>Action</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>@if($user->role == 2) Admin @elseif($user->role == 1)User @else Unknown @endif()</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.user.makeadmin', $user->id) }}">Switch admin rights</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </section>
@endsection
