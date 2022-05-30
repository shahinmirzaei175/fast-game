<?php

namespace Modules\Game\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Game\Events\NewCodeRequestInserted;
use Modules\Game\Listeners\CheckCodeRequestStatus;

class EventServiceProvider extends ServiceProvider
{


    protected $listen = [
        NewCodeRequestInserted::class => [
            CheckCodeRequestStatus::class,
        ],
    ];



    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
