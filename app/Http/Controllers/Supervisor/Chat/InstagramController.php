<?php

namespace App\Http\Controllers\Supervisor\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index(){
        return view('supervisor.chats.instagram.index');
    }

    public function show(){
        return view('supervisor.chats.instagram.show');
    }
}
