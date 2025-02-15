<?php

namespace App\Client;

use App\BasicNotification\BasicNotification;
use App\Decorators\EmailNotificationDecorator;
use App\Decorators\SmsNotificationDecorator;

class Client
{

     public static function sendNotification()
     {

          $notification = new BasicNotification();
          $notification = new SmsNotificationDecorator($notification);
          $notification = new EmailNotificationDecorator($notification);
          echo $notification->send("Ceci est un message important");

     }

}