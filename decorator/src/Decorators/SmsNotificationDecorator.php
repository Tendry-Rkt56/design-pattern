<?php

namespace App\Decorators;

use App\Notification\Notification;

class SmsNotificationDecorator implements Notification
{

     public function __construct(private Notification $notification)
     {
          
     }

     public function send(string $message): string
     {
          return $this->notification->send($message) . ' Envoyé par SMS';
     }

}