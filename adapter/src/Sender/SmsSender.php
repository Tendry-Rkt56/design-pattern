<?php

namespace App\Sender;

class SmsSender
{

     public function sendSms(string $phoneNumber, string $message): void
     {

          echo "Envoi d'un SMS au $phoneNumber: $message\n";

     }

}