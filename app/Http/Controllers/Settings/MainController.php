<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function sidebar(){
        $val = Session::get('sidebar_toggled');

        if ($val == 'toggled'){
            $body_toggled = Session::put('body_toggled', '');
            $nav_toggled = Session::put('sidebar_toggled', '');
        }else{
            $body_toggled = Session::put('body_toggled', 'sidebar-toggled');
            $nav_toggled = Session::put('sidebar_toggled', 'toggled');
        }

    }
}
