<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder as Eloquent;

class ModelsServiceProvider extends ServiceProvider
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
        //
        Eloquent::macro('array', function ($c, $v) {
            return $this->get()
                ->where($c, $v)
                ->toArray();
        });
    }
}
