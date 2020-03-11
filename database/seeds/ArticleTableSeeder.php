<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Date;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            'title' => Str::random(10),
            'text' => Str::random(255),
            'category'=> rand ( 1 , 3) ,
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);
    }
}
