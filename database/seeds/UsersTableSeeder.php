<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    private $rid = null;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(App\Role::class)->create(
            [
                'nom' => 'base'
            ]
        )->each(
            function($role){

                $role->role_id = null;
                 $role->save();

                $this->rid = $role['id'];
            }

        );

        factory(App\Role::class)->create(
            [
                'nom' => 'premium'
            ]
        )->each(
            function($roleb){

                $roleb->role_id = $this->rid;
                $roleb->save();
                $this->rid = $roleb['id'];

            }

        );

        factory(App\Role::class)->create(
            [
                'nom' => 'ultra'
            ]
        )->each(
            function($roleu){
                $roleu->role_id = $this->rid;
                $roleu->save();

                $this->rid = $roleu['id'];
            }

        );

        factory(App\Role::class)->create(
            [
                'nom' => 'admin'
            ]
        )->each(
            function($rolea){
                $rolea->role_id = $this->rid;
                $rolea->save();
                $this->rid = $rolea['id'];
            }

        );


        factory(App\User::class)->create()->save();

    }
}
