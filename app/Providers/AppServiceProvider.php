<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    	$this->app->singleton( \App\Services\FooService::class, function ($app) {
    		return new \App\Services\FooService();
    	});

    	if ($this->app->environment() !== 'production')
    	{
    		$this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
    	}

    }
}
