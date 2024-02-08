<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    
    public function run(): void
    {
        $all_data=[
          [
            'skill' =>'HTML',
            'percent' =>'100%',
          ],
          [
            'skill' =>'CSS',
            'percent' =>'90%',
          ],
          [
            'skill' =>'JS',
            'percent' =>'50%',
          ],
          [
            'skill' =>'Laravel',
            'percent' =>'77%',
          ],
        ];
        foreach($all_data as $data){
            Skill::create($data);
        }
    }
}
