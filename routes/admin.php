<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth' , 'roles' , 'role:admin' , 'active'] , 'prefix'=>'admin' , 'as'=>'admin.'], function (){

    Route::get('/'           , [MainController::class , 'index']);
    Route::get('/dashboard'  , [MainController::class , 'index'])->name('index');

});
