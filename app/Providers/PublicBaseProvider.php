<?php

namespace App\Providers;

use App\Models\Adverts;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PublicBaseProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['base', 'Content.Layouts.base'], function ($view) {
            $adverts = Adverts::orderBy('position', 'asc')->get();
            $view->with(['adverts' => $adverts]);
        });
    }
}
