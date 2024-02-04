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
            'country' => 'Indonesia',
            'profile_images' => 'profile.png'
        ]);

        \App\Models\Platform::factory()->create([
            'platform_name' => 'Twitter',
            'images' => 'twitter.png',
            'link' => 'https://twitter.com/'
        ]);
        \App\Models\Platform::factory()->create([
            'platform_name' => 'Facebook',
            'images' => 'facebook.png',
            'link' => 'https://facebook.com/'
        ]);
        \App\Models\Platform::factory()->create([
            'platform_name' => 'Discord',
            'images' => 'Discord.png',
            'link' => 'https://discord.com/'
        ]);
        \App\Models\Platform::factory()->create([
            'platform_name' => 'Tiktok',
            'images' => 'tiktok.png',
            'link' => 'https://tiktok.com/'
        ]);
        \App\Models\Platform::factory()->create([
            'platform_name' => 'Instagram',
            'images' => 'instagram.png',
            'link' => 'https://instagram.com/'
        ]);
    }
}
