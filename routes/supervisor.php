<?php

use App\Http\Controllers\Public\ConversationController;
use App\Http\Controllers\Supervisor\MainController;
use App\Http\Controllers\Supervisor\Mail\EmailController;
use App\Http\Controllers\Supervisor\Chat\MessengerController;
use App\Http\Controllers\Supervisor\Chat\InstagramController;
use App\Http\Controllers\Supervisor\Chat\TwitterController;
use App\Http\Controllers\Supervisor\Chat\WhatsappController;
use App\Http\Controllers\Supervisor\Chat\LivechatController;
use App\Http\Controllers\Supervisor\Report\TicketReportController;
use App\Http\Controllers\Supervisor\Report\UserReportController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth' , 'roles' , 'role:supervisor' , 'active'] , 'prefix'=>'supervisor' , 'as'=>'supervisor.'], function (){

    /**** DASHBOARD ****/
    Route::get('/'                          , [MainController::class , 'index']);
    Route::get('/dashboard'                 , [MainController::class , 'index'])->name('index');
    Route::get('/tickets-dashboard'         , [MainController::class , 'ticket_index'])->name('tickets.index');
    Route::get('/social-media_dashboard'    , [MainController::class , 'social_index'])->name('socials.index');
    Route::get('/chats-dashboard'           , [MainController::class , 'chat_index'])->name('chats.index');

    /**** USERS ****/
    Route::get('/user/edit'                     , [MainController::class , 'edit'])->name('profile.edit');

    /**** MAIL ****/
    Route::get('/mail'                          , [EmailController::class , 'index'])->name('mail.index');
    Route::get('/mail/show'                     , [EmailController::class , 'show'])->name('mail.show');
    Route::get('/mail/create'                   , [EmailController::class , 'create'])->name('mail.create');


    /**** CHATS ****/
    //messenger
    Route::get('/chat/messenger'                , [MessengerController::class , 'index'])->name('messenger.index');
    Route::get('/chat/messenger/show'           , [MessengerController::class , 'show'])->name('messenger.show');
    //messenger
    Route::get('/chat/instagram'                , [InstagramController::class , 'index'])->name('instagram.index');
    Route::get('/chat/instagram/show'           , [InstagramController::class , 'show'])->name('instagram.show');
    //messenger
    Route::get('/chat/twitter'                  , [TwitterController::class , 'index'])->name('twitter.index');
    Route::get('/chat/twitter/show'             , [TwitterController::class , 'show'])->name('twitter.show');
    //messenger
    Route::get('/chat/whatsapp'                 , [WhatsappController::class , 'index'])->name('whatsapp.index');
    Route::get('/chat/whatsapp/show'            , [WhatsappController::class , 'show'])->name('whatsapp.show');
    //messenger
    Route::get('/chat/livechat'                 , [LivechatController::class , 'index'])->name('livechat.index');
    Route::get('/chat/livechat/show'            , [LivechatController::class , 'show'])->name('livechat.show');


    /**** Tickets Report ****/
    //Ticket Detailed
    Route::get('/report/tickets'                , [TicketReportController::class , 'ticket_index'])->name('report.ticket_detailed.index');
    //Social Media Detailed
    Route::get('/report/social_media'           , [TicketReportController::class , 'social_media_index'])->name('report.social_media_detailed.index');
    //Ticket Detailed
    Route::get('/report/chats'                  , [TicketReportController::class , 'chat_index'])->name('report.chat_detailed.index');



    /**** Users Report ****/
    //Ticket Detailed
    Route::get('/report/user/ticket_count'      , [UserReportController::class , 'ticket_count'])->name('report.ticket_count.index');
    //Social Media Detailed
    Route::get('/report/user/login_logout'      , [UserReportController::class , 'login_logout'])->name('report.login_logout.index');
    //Ticket Detailed
    Route::get('/report/user/status'            , [UserReportController::class , 'status'])->name('report.status.index');

    /**** Extensya Conversation ****/
    Route::get('/conversations'                 , [ConversationController::class , 'index'])->name('conversation.index');
    Route::get('/conversations/{conversation}'          , [ConversationController::class , 'show'])->name('conversation.show');

});
