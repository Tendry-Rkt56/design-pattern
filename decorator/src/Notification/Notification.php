<?php

namespace App\Notification;

interface Notification
{

     public function send(string $message): string;

}