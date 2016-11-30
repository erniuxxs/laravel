@extends('layouts.master')

@section('title', 'Chat Room Creation')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">All Rooms</div>
                <div class="panel-body">
                    <table class="table table-condensed table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Room Name</th>
                                <th>Creator</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum only (Arabic)</td>
                                <td>Username</td>
                                <td>2016-11-30 14:29:30</td>
                                <td><span class="badge">Active</span></td>
                                <td>
                                    <a href="{{ route('chat.creation.edit', 1) }}" class="btn btn-default btn-xs">Edit</a>
                                    <form action="" method="post">
                                        <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <h5>Settings Up Rooms</h5>
                <a href="{{ route('chat.creation.create') }}" class="btn btn-sm btn-primary btn-block">Create Chat Room</a>
            </div>
        </div>
    </div>
@endsection