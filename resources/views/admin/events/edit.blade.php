@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Event
            <small>{{ $event->name }}</small>
        </h1>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Event Details</h3>
            </div>

            <form action="{{ route('admin.event.update', $event->id) }}" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $event->name }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Info</label>
                        <textarea type="text" class="form-control" name="info"
                                  required>{{ $event->info }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $event->public_price }}"
                               required>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>


    </section>
@endsection
