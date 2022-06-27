<?php

namespace App\Http\Controllers;

use App\Services\Domain\Notification\DeviceNotification;
use App\Services\Domain\Notification\EmailNotification;
use App\Services\Domain\Notification\SMSNotification;
use App\Services\Interface\INotification;

class NotificationController extends Controller
{
    private $notification;
    
    public function __construct(INotification $notification)
    {
        $this->notification = $notification;
    }
    
    public function send()
    {
        $data = $this->notification->send();

        dd($data);
    }
    
    // public function setAlgorithm(INotification $notification)
    // {
    //     $this->notification = $notification;
    // }
    
    // private function handlerStatus($status)
    // {
    //     switch ($status) {
    //         case DAYOFF_STATUS_REQUEST:
    //             $implements = [new EmailNotification(), new SMSNotification()];
    //             break;
    //         case DAYOFF_STATUS_APPROVAL:
    //             $implements = [new SMSNotification()];
    //             break;
    //         default:
    //             $implements = [];
    //             break;
    //     }
        
    //     return $implements;
    // }
    
    // Strategy Design Pattern
    // public function send()
    // {
    //     $strategy = $this->handlerStatus($dayOffStatus = 1);
        
    //     foreach ($strategy as $implement) {
    //         $this->setAlgorithm($implement);
    //         $data[] = $this->notification->send();
    //     }
        
    //     dd($data);
    // }
}