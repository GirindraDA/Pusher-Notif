<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewContentNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $recipient;


    public function __construct($message, $recipient)
    {
        $this->message = $message;
        $this->recipient = $recipient;
    }

    public function broadcastOn()
    {
        return [$this->recipient.'-channel']; // Gunakan channel yang sesuai dengan recipient
    }

    public function broadcastAs()
    {
        return $this->recipient.'-event'; // Gunakan event yang sesuai dengan recipient
    }

}
