<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
       $ettings=[
        [
            'title' => 'Portfolio',
            'tuter' => 'https://twitter.com/i/flow/login',
            'facebook' => 'https://www.facebook.com/',
            'instragram' => 'https://www.instagram.com/',
            'linkdin' => 'https://www.linkedin.com/feed/',
            'location' => 'Khulna, Bangladesh',
            'email' => 'sadiaakter5732@gmail.com',
            'call' => '01947520789',
        ],
       ];
       Setting::insert($ettings);
    }
}
