<?php

namespace App\Http\Controllers\Supervisor\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketReportController extends Controller
{
    public function ticket_index()
    {
        return view('supervisor.reports.ticket');
    }
    public function social_media_index()
    {
        return view('supervisor.reports.social_media');
    }
    public function chat_index()
    {
        return view('supervisor.reports.chat');
    }

}
