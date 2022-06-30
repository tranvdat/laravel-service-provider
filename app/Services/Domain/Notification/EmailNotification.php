<?php

namespace App\Services\Domain\Notification;

use App\Services\Interfaces\INotification;

class EmailNotification implements INotification
{
    public function send()
    {
        return 'Send notification to email';
    }
}