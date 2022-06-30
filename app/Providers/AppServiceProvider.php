<?php

namespace App\Providers;

use App\Services\Domain\Notification\DeviceNotification;
use App\Services\Domain\Notification\EmailNotification;
use App\Services\Interfaces\INotification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(INotification::class, function () {
            return new EmailNotification;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
