<?php

namespace SundayIT\chatframe;

use Illuminate\Support\ServiceProvider;

class chatframeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'sundayit');
         $this->loadViewsFrom(__DIR__.'/../views', 'sundayit');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes.php');

         $this->publishes([
         	__DIR__.'/../assets/' => public_path('/sundayit/chatframe/')
		 ], 'public');

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
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/chatframe.php', 'chatframe');

        // Register the service the package provides.
        $this->app->singleton('chatframe', function ($app) {
            return new chatframe;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['chatframe'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/chatframe.php' => config_path('chatframe.php'),
        ], 'chatframe.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/sundayit'),
        ], 'chatframe.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/sundayit'),
        ], 'chatframe.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/sundayit'),
        ], 'chatframe.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
