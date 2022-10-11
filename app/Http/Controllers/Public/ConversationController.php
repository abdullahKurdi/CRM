<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request){

        $conversations = $request->user()->conversations;

        return view('supervisor.conversation.index',compact('conversations'));
    }

    public function show(Conversation $conversation , Request $request){
//        dd($conversation);
        $conversations = $request->user()->conversations;
        $this->authorize('show', $conversation);
        $request->user()->conversations()->updateExistingPivot($conversation ,['read_at'=>now()]);

        return view('supervisor.conversation.show',compact('conversation','conversations'));
    }
}
