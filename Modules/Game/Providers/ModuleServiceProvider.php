<?php

namespace Modules\Game\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Game\Repositories\Interfaces\CodeRepositoryInterface;
use Modules\Game\Repositories\CodeRepository;
use Modules\Game\Repositories\Interfaces\WinnerRepositoryInterface;
use Modules\Game\Repositories\WinnerRepository;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CodeRepositoryInterface::class,CodeRepository::class);
        $this->app->bind(WinnerRepositoryInterface::class,WinnerRepository::class);
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
