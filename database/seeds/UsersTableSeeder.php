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


        factory(App\User::class)->create(
        ['name' => 'admin',
            'email' => 'admin@admin.fr',
            'password'=> bcrypt('password'),
            'role_id'=> 4]
        )->save();

        factory(App\Article::class)->create([
            'title' => 'article base',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut lorem nec massa euismod aliquet 
            nec tincidunt enim. Vivamus ornare rutrum arcu ut aliquet. Maecenas vitae elit massa. Vivamus accumsan sit
             amet massa eget varius. Ut eu justo pulvinar tortor sollicitudin consequat. In at orci feugiat, vulputate 
             nibh id, egestas mauris. Morbi viverra risus ac sapien tincidunt, nec dictum erat maximus. Quisque semper
              accumsan odio, nec convallis tortor fermentum at. Pellentesque at nibh dui.',
            'role_id'=> 1,
        ])->save();

        factory(App\Article::class)->create([
            'title' => 'article premium',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut lorem nec massa euismod aliquet 
            nec tincidunt enim. Vivamus ornare rutrum arcu ut aliquet. Maecenas vitae elit massa. Vivamus accumsan sit
             amet massa eget varius. Ut eu justo pulvinar tortor sollicitudin consequat. In at orci feugiat, vulputate 
             nibh id, egestas mauris. Morbi viverra risus ac sapien tincidunt, nec dictum erat maximus. Quisque semper
              accumsan odio, nec convallis tortor fermentum at. Pellentesque at nibh dui.',
            'role_id'=> 2,
        ])->save();

        factory(App\Article::class)->create([
            'title' => 'article ultra',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut lorem nec massa euismod aliquet 
            nec tincidunt enim. Vivamus ornare rutrum arcu ut aliquet. Maecenas vitae elit massa. Vivamus accumsan sit
             amet massa eget varius. Ut eu justo pulvinar tortor sollicitudin consequat. In at orci feugiat, vulputate 
             nibh id, egestas mauris. Morbi viverra risus ac sapien tincidunt, nec dictum erat maximus. Quisque semper
              accumsan odio, nec convallis tortor fermentum at. Pellentesque at nibh dui.',
            'role_id'=> 3,
        ])->save();

        factory(App\Article::class)->create([
            'title' => 'article admin',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut lorem nec massa euismod aliquet 
            nec tincidunt enim. Vivamus ornare rutrum arcu ut aliquet. Maecenas vitae elit massa. Vivamus accumsan sit
             amet massa eget varius. Ut eu justo pulvinar tortor sollicitudin consequat. In at orci feugiat, vulputate 
             nibh id, egestas mauris. Morbi viverra risus ac sapien tincidunt, nec dictum erat maximus. Quisque semper
              accumsan odio, nec convallis tortor fermentum at. Pellentesque at nibh dui.',
            'role_id'=> 4,
        ])->save();

    }
}
