<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageEvent;
class ChatController extends Controller
{
    public function index(){
        $users = User::all();
        return view("layouts.app",["users"=>$users]);
    }

    public function chatMessage(Request $request, User $user){
        $messages = Chat::where(function ($query) use ($request) {
            $query->where('sender_id', Auth::id())
                  ->where('receiver_id', $request->receiver_id);
        })->orWhere(function ($query) use ($request) {
            $query->where('sender_id', $request->receiver_id)
                  ->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();


          $html = view("chat.render.show-message",["users"=>$messages])->render();

          return response()->json(
            [
                'success' =>true,
                "html"    =>$html
            ]
    );
    }

    public function store_message(Request $request){
       $chat= Chat::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);
         event(new MessageEvent($chat));
        return response()->json([
            'success'  =>true,
            'chat'     => $chat
        ]);
    }
}
