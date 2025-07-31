<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\ServiceImage;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::factory(50)->create()->each(function ($service) {
        // Attach 1 to 3 random images per service
        ServiceImage::factory(rand(1, 3))->create([
            'service_id' => $service->id,
        ]);
    });
    }//
}
