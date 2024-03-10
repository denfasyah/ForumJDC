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
            'fullname' => 'Denfasyah',
            'username' => 'denfasyah',
            'about' => 'nothing',
            'email' => 'denfasyah@junior.dev',
            'password' => bcrypt('denfasyah123'),
            'country' => 'Indonesia',
            'profile_images' => 'denfasyah.png'
        ]);
        \App\Models\User::factory()->create([
            'fullname' => 'Dian ',
            'username' => 'dian',
            'about' => 'nothing',
            'email' => 'dian@junior.dev',
            'password' => bcrypt('dian123'),
            'country' => 'Indonesia',
            'profile_images' => 'dian.png'
        ]);
        \App\Models\Explore::factory(3)->create([
            "body" => fake()->text(25),
            "like" => fake()->numberBetween(0,1000),
            "dislike" => fake()->numberBetween(0,100),
            "share" => mt_rand(1, 999),
            "user_id" => fake()->randomElement([1,2]),
        ]);

        // \App\Models\Platform::factory()->create([
        //     'platform_name' => 'Twitter',
        //     'images' => 'twitter.png',
        //     'link' => 'https://twitter.com/'
        // ]);
        // \App\Models\Platform::factory()->create([
        //     'platform_name' => 'Facebook',
        //     'images' => 'facebook.png',
        //     'link' => 'https://facebook.com/'
        // ]);
        // \App\Models\Platform::factory()->create([
        //     'platform_name' => 'Discord',
        //     'images' => 'Discord.png',
        //     'link' => 'https://discord.com/'
        // ]);
        // \App\Models\Platform::factory()->create([
        //     'platform_name' => 'Tiktok',
        //     'images' => 'tiktok.png',
        //     'link' => 'https://tiktok.com/'
        // ]);
        // \App\Models\Platform::factory()->create([
        //     'platform_name' => 'Instagram',
        //     'images' => 'instagram.png',
        //     'link' => 'https://instagram.com/'
        // ]);
    }
}
