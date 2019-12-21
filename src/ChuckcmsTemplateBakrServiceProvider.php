<?php

namespace Chuckbe\ChuckcmsTemplateBakr;

use Chuckbe\ChuckcmsTemplateBakr\Commands\PublishBakr;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateBakrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishStarter::class,
            ]);
        }
        
        //php artisan vendor:publish --tag=chuckcms-template-bakr-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-bakr'),
        ], 'chuckcms-template-bakr-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-bakr.php' => config_path('chuckcms-template-bakr'),
        // ], 'chuckcms-template-bakr-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-bakr');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-bakr.php', 'chuckcms-template-bakr-config'
        // );
    }
}
