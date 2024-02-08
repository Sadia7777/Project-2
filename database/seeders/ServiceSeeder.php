<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serices=[
            [
              'title' =>'is simply dummy text of the printing and typesetting industry',
              'description' =>'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
            [
              'title' =>'is simply dummy text of the printing and typesetting industry',
              'description' =>'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
            [
              'title' =>'is simply dummy text of the printing and typesetting industry',
              'description' =>'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
          ];
          Service::insert($serices);
    }
}
