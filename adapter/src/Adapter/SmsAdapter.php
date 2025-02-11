<?php

namespace App\Adapter;

use App\MessageSender\MessageSender;
use App\Sender\SmsSender;

class SmsAdapter implements MessageSender
{

     public function __construct(private SmsSender $smsSender)
     {
          
     }

     public function send(string $recipient, string $message)
     {
          $this->smsSender->sendSms($recipient, $message);
     }

}