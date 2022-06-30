<?php

namespace App\Services\Domain\Notification;

use App\Services\Interfaces\INotification;

class SMSNotification implements INotification
{
    public function send()
    {
        return "Send notification to sms";
    }
}