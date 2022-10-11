<?php

use App\Http\Controllers\Agent\MainController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth' , 'roles' , 'role:agent' , 'active'] , 'prefix'=>'agent' , 'as'=>'agent.'], function (){

    Route::get('/'           , [MainController::class , 'index']);
    Route::get('/dashboard'  , [MainController::class , 'index'])->name('index');

});
