<?php

namespace App\Services\Domain\Notification;

use App\Services\Interfaces\INotification;

class DeviceNotification implements INotification
{
    public function send()
    {
        return 'Send notification to device';
    }
}