<?php

namespace Ab01faz101\IranProvinces\Tests\Feature;

use Ab01faz101\IranProvinces\Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class SeederTest extends TestCase
{
    public function test_seeder_work(): void
    {
        $this->assertDatabaseCount('cities', 448);
        $this->assertDatabaseCount('provinces', 31);
    }
}