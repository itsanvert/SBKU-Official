<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
   // Add this to your AppServiceProvider (app/Providers/AppServiceProvider.php) in the boot() method:


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
}
}
