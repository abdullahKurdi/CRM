<?php

namespace App\Http\Controllers\Supervisor\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserReportController extends Controller
{
    public function ticket_count()
    {
        return view('supervisor.reports.ticket');
    }
    public function login_logout()
    {
        return view('supervisor.reports.');
    }
    public function status()
    {
        return view('supervisor.reports.');
    }
}
