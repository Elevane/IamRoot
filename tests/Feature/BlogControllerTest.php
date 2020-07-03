<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class BlogControllerTest extends TestCase
{

    /**
     * test si l'utilisateur peut accéder a la route
     *  @return void
     */
    public function testBlogAsAdminAction(){
        $user = factory(User::class)->create(['role_id' => 4]);
        $this->be($user);
        $response = $this->call('GET', '/blog');
        $this->assertTrue($response->isOk(), "l'admin devrait avoir les droits d'acces a cete route");
    }



     /**
     * test si l'user peut accéder a une route interdite
     *  @return void
     */
    public function testBlogAsUserAction(){
        $user = factory(User::class)->create(['role_id' => 1]);
        $this->be($user);
        $response = $this->call('GET', '/blog');
        $this->assertTrue($response->isOk(), "l'utilisateur ne devrait pas avoit les droti d'acces a cette route");
    }




}
