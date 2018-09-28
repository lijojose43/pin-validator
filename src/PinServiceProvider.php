<?php

namespace LijoJoses43\PinValidator;

use Illuminate\Support\ServiceProvider;
use LijoJoses43\PinValidator\Commands\PinValidatorMakeCommand;

class PinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PinValidatorMakeCommand::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    
    }
}
