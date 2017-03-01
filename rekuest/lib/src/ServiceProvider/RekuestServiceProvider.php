<?php

namespace Rekuest\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Rekuest\AliasLoader;
use libphonenumber\PhoneNumberUtil;

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
            return PhoneNumberUtil::getInstance();
        });
        
        /**
         * Alias
         */
        $aliases = require __DIR__.'/aliases.php';
        AliasLoader::getInstance($aliases)->register();
    }
}