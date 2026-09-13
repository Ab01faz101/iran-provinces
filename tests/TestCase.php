<?php

namespace Ab01faz101\IranProvinces\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Ab01faz101\IranProvinces\IranProvincesServiceProvider;
use Ab01faz101\IranProvinces\Database\Seeders\IranProvincesSeeder;
class TestCase extends Orchestra   // ← must be named TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            IranProvincesServiceProvider::class,
        ];
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../src/database/migrations');
    }

    protected function defineDatabaseSeeders()
    {
        $this->seed(IranProvincesSeeder::class);
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
}