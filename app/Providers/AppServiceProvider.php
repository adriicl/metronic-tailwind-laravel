<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!class_exists(\Diglactic\Breadcrumbs\Breadcrumbs::class)) {
            return;
        }
    
        if (!\Diglactic\Breadcrumbs\Breadcrumbs::exists('welcome')) {
            require base_path('routes/breadcrumbs.php');
        }
    }
}
