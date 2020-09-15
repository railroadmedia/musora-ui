<?php

namespace Railroad\MusoraUI\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class MusoraUIServiceProvider extends ServiceProvider
{
    /**
     * RailcontentServiceProvider constructor.
     *
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        parent::__construct($application);
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../blade', 'musora-ui');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
