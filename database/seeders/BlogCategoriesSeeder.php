<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BlogCategories;
use Illuminate\Database\Seeder;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            [
              'blog_categories' =>'Laravel',
            ],
            [
              'blog_categories' =>'Web development',
            ],
            [
              'blog_categories' =>'SEO Marketing',
            ],
          ];
          
          BlogCategories::insert($categories);
    }
}
