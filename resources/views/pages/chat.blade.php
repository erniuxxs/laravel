@extends('layouts.master')

@section('title', 'Chat Dashboard')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chat easy preview
            </div>
            <div class="panel-body">
                <div class="message-box">
                    <div class="chat-user-name">
                        <small>Sender:</small> Username
                    </div>
                    <div class="chat-user-message">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </div>
                </div>
                <div class="message-box">
                    <div class="chat-user-name">
                        <small>Sender:</small> Username
                    </div>
                    <div class="chat-user-message">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </div>
                </div>
                <div class="message-box">
                    <div class="chat-user-name">
                        <small>Sender:</small> Username
                    </div>
                    <div class="chat-user-message">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </div>
                </div>

                <div class="share-message-box">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="guest_name">Guest Name:</label>
                            <input type="text" class="form-control" name="guest_name" placeholder="Insert Your Name">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" class="form-control" cols="15" rows="2" placeholder="Put message in chatbox as Username"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary btn-custom margin-top-10 btn-block btn-sm" value="Put Message">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection