<?php

namespace App\Decorators;

use App\Notification\Notification;

class EmailNotificationDecorator implements Notification
{

     public function __construct(private Notification $notification)
     {
          
     }

     public function send(string $message): string
     {
          return $this->notification->send($message). ' envoyé par email';
     }

}