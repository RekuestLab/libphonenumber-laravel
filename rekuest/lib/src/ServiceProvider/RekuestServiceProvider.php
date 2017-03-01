<?php

namespace Rekuest\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Rekuest\AliasLoader;

class RekuestServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('lphonefacade',function(){
            return new ListManager;
        });
        
        /**
         * Alias
         */
        $aliases = require __DIR__.'/aliases.php';
        AliasLoader::getInstance($aliases)->register();
    }
}