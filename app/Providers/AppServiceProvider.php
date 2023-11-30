<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Rules\RecaptchaMa; // Import the Recaptcha rule
use ReCaptcha\ReCaptcha;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the Recaptcha validation rule
        Validator::extend('recaptcha', [RecaptchaMa::class, 'validate']);
    }
}