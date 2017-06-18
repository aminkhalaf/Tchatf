<?php

namespace App\Http\Controllers;

use App\messages;
use App\messages_replay;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('home', compact('users'));
    }

    public function messages($from, $to)
    {

        $messages_from = messages::where('user_from', $from)->where('user_to', $to)->get()->all();
        $messages_to = messages::where('user_from', $to)->where('user_to', $from)->get()->all();
        $messages = (array_merge($messages_from, $messages_to));
        $array = collect($messages)->sortBy('date');

        return view('messages', compact('array', 'from', 'to'));
    }

    public function sendMessage(Request $request)
    {

        $from = $request->user_from;
        $to = $request->user_to;
        $message = messages::create($request->all());

        $message_reply = new messages_replay;
        $message_reply->msg = $request->msg;
        $message_reply->messages_id = $message->id;
        $message_reply->save();
        return redirect("send/$from/$to");
    }
}
