<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Date;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'nom' => "admin",
            'category' => 1,
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);

        DB::table('role')->insert([
            'nom' => "base_user",
            'category' => 1,
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);

        DB::table('role')->insert([
            'nom' => "premium_user",
            'category' => 1,
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);

        DB::table('role')->insert([
            'nom' => "ultra_user",
            'category' => 1,
            'created_at'=> Date::now(),
            'updated_at'=> Date::now(),
        ]);
    }
}
