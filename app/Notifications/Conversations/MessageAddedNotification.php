<?php

namespace App\Notifications\Conversations;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageAddedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'id'=>$this->message->id,
            'user'=>$this->message->user,
            'body'=>$this->message->body,
            'created_at'=>$this->message->created_at->format('M d, Y'),
            'route_url'=>route('supervisor.conversation.show',$this->message->conversation->uuid)
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data' =>[
                'id'=>$this->message->id,
                'user'=>$this->message->user,
                'body'=>$this->message->body,
                'created_at'=>$this->message->created_at->format('M d, Y'),
                'route_url'=>route('supervisor.conversation.show',$this->message->conversation->uuid)
            ]
        ]);
    }
}
