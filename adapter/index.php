<?php

use App\Adapter\EmailAdapter;
use App\Adapter\SmsAdapter;
use App\MessageSender\MessageSender;
use App\Sender\EmailSender;
use App\Sender\SmsSender;

require_once 'vendor/autoload.php';

function sendMessage(MessageSender $sender, string $recipient, string $message)
{
     $sender->send($recipient, $message);
}

$emailSender = new EmailSender();
$emailAdapter = new EmailAdapter($emailSender);

sendMessage($emailAdapter, "contact@gmail.com", "Voici un message par mail");

$smsSender = new SmsSender();
$smsAdapter = new SmsAdapter($smsSender);

sendMessage($smsAdapter, "+261 34 44 444 44", "Voici un message par SMS");