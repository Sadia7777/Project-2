<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $contacts=[
        [
            'name' =>'Sadia Akter',
            'email' =>'sadia@gmail.com',
            'subject' =>'PHP',
            'message' =>'Assalamualaikum',
        ],
        [
            'name' =>'Shahana Akter',
            'email' =>'shahana@gmail.com',
            'subject' =>'JS',
            'message' =>'Assalamualaikum',
        ],
        [
            'name' =>'Shantona Akter',
            'email' =>'shantona@gmail.com',
            'subject' =>'Laravel',
            'message' =>'Assalamualaikum',
        ],
       ];
       Contact::insert($contacts);
    }
}
