@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if($users)
                            @foreach($users as $user)
                                @if($user->isOnline())
                                    <li>
                                        {{$user->name}} (online)
                                        <a href="{{url("send/".Auth::id()."/".$user->id)}}">send message</a>
                                    </li>
                                @elseif(!$user->isOnline())
                                    <li>
                                        {{$user->name}} (offline)
                                        <a href="{{url("send/".Auth::id()."/".$user->id)}}">send message</a>
                                    </li>

                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
