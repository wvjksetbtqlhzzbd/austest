<?php

namespace Wvjksetbtqlhzzbd\Austest;

use Illuminate\Support\ServiceProvider;

class AustestServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'wvjksetbtqlhzzbd');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'wvjksetbtqlhzzbd');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/austest.php', 'austest');

        // Register the service the package provides.
        $this->app->singleton('austest', function ($app) {
            return new Austest;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['austest'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/austest.php' => config_path('austest.php'),
        ], 'austest.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/wvjksetbtqlhzzbd'),
        ], 'austest.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/wvjksetbtqlhzzbd'),
        ], 'austest.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/wvjksetbtqlhzzbd'),
        ], 'austest.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
