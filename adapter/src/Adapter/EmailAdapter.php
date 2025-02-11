<?php

namespace App\Adapter;

use App\MessageSender\MessageSender;
use App\Sender\EmailSender;

class EmailAdapter implements MessageSender
{

     public function __construct(private EmailSender $emailSender)
     {
          
     }

     public function send(string $recipient, string $message)
     {
          $this->emailSender->sendEmail($recipient, $message);
     }

}