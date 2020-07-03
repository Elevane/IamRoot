<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Role;

class RoleTest extends TestCase
{
    /**
     * Teste la propriété name de Role
     *
     * @return void
     */
    public function testNameRole()
    {
       $role = new Role;


       $role->setName('user');

        $this->assertEquals($role->getName(), 'user');
    }
}
