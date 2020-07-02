<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * Teste la propriété name de User
     *
     * @return void
     */
    public function testNameUser()
    {
       $user = new User;


       $user->setName('gilbert');

        $this->assertEquals($user->getName(), 'gilbert');
    }

    /**
     * Teste la propriété email de User
     *
     * @return void
     */
    public function testEmailisCharUser()
    {
        $user = new User;


        $user->setEmail('user@email.fr');

        $this->assertEquals($user->getEmail(), 'user@email.fr');
    }

    /**
     * Teste si l'email est une adresse email valide
     *
     * @return void
     */

    public function testEmailIsEmailAdess(){
        $user = new user;

        $user->setEmail('user@email.fr');
        $this->assertRegExp('/^.+\@\S+\.\S+$/', $user->getEmail());
    }

    /**
     * Teste la propriété Password de User
     *
     * @return void
     */
    public function testPasswordUser()
    {
        $user = new User;


        $user->setPassword('password');

        $this->assertEquals($user->getPassword(), 'password');
    }






}
