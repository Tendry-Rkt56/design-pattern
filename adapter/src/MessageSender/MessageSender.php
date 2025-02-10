<?php

namespace App\MessageSender;

interface MessageSender
{

     public function send(string $recipient, string $message);

}