<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'fullname' => 'Test User',
            'username' => 'test',
            'email' => 'test@example.com',
            'password' => bcrypt('Kangyann57'),
        ]);

        \App\Models\Platform::factory()->create([
            'platform_name' => 'Tiktok',
            'images' => '1.jpg'
        ]);
        \App\Models\Platform::factory()->create([
            'platform_name' => 'Instagram',
            'images' => '1.jpg'
        ]);
        \App\Models\Platform::factory()->create([
            'platform_name' => 'Facebook',
            'images' => '1.jpg'
        ]);
    }
}
