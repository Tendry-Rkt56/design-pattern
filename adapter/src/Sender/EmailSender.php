<?php

namespace App\Sender;

class EmailSender
{

     public function sendEmail(string $recipient, string $message): void
     {

          echo "Envoi d'un email à $recipient: $message\n";

     }

}