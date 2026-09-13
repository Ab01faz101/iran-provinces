<?php

namespace Ab01faz101\IranProvinces\Tests\Feature;

use Ab01faz101\IranProvinces\Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class MigrationTest extends TestCase
{
    public function test_migrations_and_seeder_work(): void
    {
        $this->assertTrue(Schema::hasTable('provinces'));
        $this->assertTrue(Schema::hasTable('cities'));
    }
}