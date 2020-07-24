<?php

namespace Myckhel\CheckMobi;

use Illuminate\Support\ServiceProvider;

class CheckMobiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->mergeConfigFrom(__DIR__.'/../config/checkmobi.php', 'checkmobi');

      // Register the service the package provides.
      $this->app->singleton('checkmobi', function ($app) {
          return new CheckMobi;
      });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['checkmobi'];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'myckhel');
      // $this->loadViewsFrom(__DIR__.'/../resources/views', 'myckhel');
      $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
      $this->loadRoutesFrom(__DIR__.'/routes.php');

      // Publishing is only necessary when using the CLI.
      if ($this->app->runningInConsole()) {
          $this->bootForConsole();
      }
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
            __DIR__.'/../config/checkmobi.php' => config_path('checkmobi.php'),
        ], 'checkmobi.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/myckhel'),
        ], 'checkmobi.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/myckhel'),
        ], 'checkmobi.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/myckhel'),
        ], 'checkmobi.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
