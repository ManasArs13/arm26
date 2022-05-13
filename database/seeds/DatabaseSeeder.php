<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'name' => 'Создание веб-сайтов',
                'description'=>'Выполение работ любой сложности (лендинги, карпоративные сайты или интернет магазины). Цены зависят от сложности - от 15 т.р. до 100 т.р.',
                'category_id'=>'1',
                'user_id'=>'1',
                'phone_number'=>'89397524410',
                ]);
        
        DB::table('categories')->insert([
                'title' => 'IT',
                 'img'=>'',
                'sort_id'=>'1',
           ]);
    }
}
