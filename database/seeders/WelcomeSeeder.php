<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Welcome;

class WelcomeSeeder extends Seeder
{
   
    public function run(): void
    {
        {
            $all_data=[
              [
                'name' =>'Sadia Akter',
                'heading' =>"I'm a professional Laravel Developer",
              ],
            ];
            Welcome::insert($all_data);
        }
    }
}
