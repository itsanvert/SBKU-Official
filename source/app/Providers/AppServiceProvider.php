<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;


class AppServiceProvider extends ServiceProvider
{
   // Add this to your AppServiceProvider (app/Providers/AppServiceProvider.php) in the boot() method:
/**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

public function boot()
{
    // Add this to your AppServiceProvider's boot method
    Filament::serving(function () {
        // Register custom navigation group
        Filament::registerNavigationGroups([
            'Content',
            'Blog',
            'Settings',
        ]);
    });
    Str::macro('cleanFileName', function ($name) {
        return preg_replace('/[^a-zA-Z0-9\-\._]/', '', Str::slug($name));
    });

}
}
