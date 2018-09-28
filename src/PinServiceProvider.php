<?php

namespace LijoJoses43\PinValidator;

use Illuminate\Support\ServiceProvider;
use LijoJoses43\PinValidator\Commands\MakePinValidatorCommand;

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
                MakePinValidatorCommand::class,
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
