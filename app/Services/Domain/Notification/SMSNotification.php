<?php

namespace App\Services\Domain\Notification;

use App\Services\Interface\INotification;

class SMSNotification implements INotification
{
    public function send()
    {
        return "Send notification to sms";
    }
}