<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BlogSeeder::class,
            SettingSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            ServiceSeeder::class,
            BlogCategoriesSeeder::class,
            WelcomeSeeder::class,
            AboutSeeder::class,
            SkillSeeder::class,
        ]);
    }
}
