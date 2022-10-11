<?php

use App\Http\Controllers\Client\MainController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth' , 'roles' , 'role:client' , 'active'] , 'prefix'=>'client' , 'as'=>'client.'], function (){

    Route::get('/'           , [MainController::class , 'index']);
    Route::get('/dashboard'  , [MainController::class , 'index'])->name('index');

});
