<?php

namespace App\Providers;

use App\Models\Soko_sections;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdminBaseProvider extends ServiceProvider
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
        //        
        View::composer(['admin.base', 'admin.soko.category_modal', 'admin.soko.edit', 'admin.soko.create'], function ($view) {
            $sections = Soko_sections::all();
            $view->with(['sections' => $sections]);
        });
    }
}
