<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{

    public function run(): void
    {
        $blogs=[
          [
            'title' =>'Title 1',
            'blog_category_id' =>'1',
            'description' =>' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.',
          ],
          [
            'title' =>'Title 2',
            'blog_category_id' =>'2',
            'description' =>' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
          ],
          [
            'title' =>'Title 3',
            'blog_category_id' =>'2',
            'description' =>' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
          ],
          [
            'title' =>'Title 3',
            'blog_category_id' =>'3',
            'description' =>' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
          ],
          [
            'title' =>'Title 4',
            'blog_category_id' =>'1',
            'description' =>' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
          ],
          [
            'title' =>'Title 5',
            'blog_category_id' =>'2',
            'description' =>' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
          ],
          [
            'title' =>'Title 6',
            'blog_category_id' =>'3',
            'description' =>' when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
          ],
        ];
        // Blog::insert($blogs);
        foreach($blogs as $blog){
            Blog::create($blog);
        }
    }
}
