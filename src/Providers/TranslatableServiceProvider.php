<?php

namespace Laravelir\Translatable\Providers;

use Illuminate\Support\ServiceProvider;
use Laravelir\Translatable\Facades\TranslatableFacade;
use Laravelir\Translatable\Console\Commands\InstallPackageCommand;

class TranslatableServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../../config/translatable.php", 'translatable');

        $this->registerFacades();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->registerCommands();
            $this->publishConfig();
        }
    }

    private function registerFacades()
    {
        $this->app->bind('translatable', function ($app) {
            return new TranslatableFacade();
        });
    }

    private function registerCommands()
    {
        $this->commands([
            InstallPackageCommand::class,
        ]);
    }

    public function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../../config/translatable.php' => config_path('translatable.php')
        ], 'translatable-config');
    }
}
