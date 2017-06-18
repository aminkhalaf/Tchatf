@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">messenger</div>

                    <div class="panel-body">
                        @if($array)
                            @foreach ($array as $message)
                                @foreach ($message->messages_reply as $reply)
                                    <li>  {{ $reply['msg']}} </li>
                                @endforeach
                            @endforeach
                        @endif
                        <br >
                        <form method="post" action="{{url("sendMessage")}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_from" value="{{$from}}">
                            <input type="hidden" name="user_to" value="{{$to}}">
                            <input type="hidden" name="date" value="{{time()}}">
                            <input type="text" class="form-control" name="msg">
                            <br >
                            <input type="submit" value="send" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
