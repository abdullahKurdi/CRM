<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('supervisor.dashboard');
    }

    public function ticket_index(){
        return view('supervisor.tickets_dashboard');
    }

    public function social_index(){
        return view('supervisor.social_media_dashboard');
    }

    public function chat_index(){
        return view('supervisor.chats_dashboard');
    }

    public function edit(){
        return view('supervisor.users.edit');
    }

}
