<?php

namespace Railroad\MusoraUI\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Railroad\MusoraUI\ViewComposers\DrumeoViewComposer;

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

        $this->publishes(
            [
                __DIR__ . '/../../public/js/generic' => public_path('vendor/musora-ui'),
            ],
            'musora-ui'
        );

        View::composer(
            'musora-ui::partials.edge-nav', DrumeoViewComposer::class . '@edgeNav'
        );
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
