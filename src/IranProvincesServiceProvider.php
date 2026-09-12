<?php

namespace Ab01faz101\IranProvinces;

use Illuminate\Support\ServiceProvider;

class IranProvincesServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'iran-provinces-migrations');

        $this->publishes([
            __DIR__ . '/../database/seeders' => database_path('seeders'),
        ], 'iran-provinces-seeders');

        $this->publishes([
            __DIR__ . '/Models' => app_path('Models'),
        ], 'iran-provinces-models');
    }
}