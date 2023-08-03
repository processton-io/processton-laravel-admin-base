<?php

namespace ProcesstonIO\ProcesstonLaravelAdminBase;

use Illuminate\Support\ServiceProvider;

class ProcesstonLaravelAdminBaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'processton-laravel-admin-base');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'processton-laravel-admin-base');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('processton-laravel-admin-base.php'),
            ], 'config');

            // Publishing the Dasboard.
            $this->publishes([
                __DIR__.'/../resources/js/Pages/Admin/' => resource_path('js/Pages/Admin/'),
            ], 'js');

            // // Publishing the views.
            // /*$this->publishes([
            //     __DIR__.'/../resources/views' => resource_path('views/vendor/processton-laravel-admin-base'),
            // ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/processton-laravel-admin-base'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/processton-laravel-admin-base'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'processton-laravel-admin-base');

        // Register the main class to use with the facade
        $this->app->singleton('processton-laravel-admin-base', function () {
            return new ProcesstonLaravelAdminBase;
        });
    }
}
