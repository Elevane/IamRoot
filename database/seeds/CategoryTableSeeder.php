<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Date;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'nom' => "admin",
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);

        DB::table('category')->insert([
            'nom' => "base",
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);

        DB::table('category')->insert([
            'nom' => "admin",
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);

        DB::table('category')->insert([
            'nom' => "admin",
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);

    }
}
