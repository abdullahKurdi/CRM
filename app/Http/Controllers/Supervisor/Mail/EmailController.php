<?php

namespace App\Http\Controllers\Supervisor\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(){
        return view('supervisor.mail.index');
    }

    public function show(){
        return view('supervisor.mail.show');
    }

    public function create(){
        return view('supervisor.mail.create');
    }
}
