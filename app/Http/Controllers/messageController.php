<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Hello;
use App\Events\MessageSent;

class messageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $hello = new Hello();
        $message = $hello->broadcast($request->post('message'));
        return response()->json(['message' => 'Başarılı'], 200);
    }

    public function send( Request $request )
    {

    $message = auth()->user()->messages()->create([
    'content' => $request->message,
    'chat_id' => $request->chat_id
    ])->load('user');
    broadcast(new MessageSent($message))->toOthers();

    return $message;

    }
}
