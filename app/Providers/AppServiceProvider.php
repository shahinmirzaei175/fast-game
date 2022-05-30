<?php

namespace App\Providers;

use App\Repositories\CrudRepository;
use App\Repositories\Interfaces\CrudRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Modules\Game\Providers\ModuleServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CrudRepositoryInterface::class,CrudRepository::class);

        $this->app->register(ModuleServiceProvider::class);

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
