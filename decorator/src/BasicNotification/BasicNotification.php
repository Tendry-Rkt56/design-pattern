<?php

namespace App\BasicNotification;

use App\Notification\Notification;

class BasicNotification implements Notification
{

     public function send(string $message): string
     {
          return "Notification de base : ".$message ."\n";
     }

}