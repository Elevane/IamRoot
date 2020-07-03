<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class BlogControllerTest extends TestCase
{

    /**
     * test la méthode qui retourne la vue de l'index
     *  @return void
     */
    public function testBlogAction(){
        $user = factory(User::class)->create(['role_id' => 4]);

        $response = $this->call('GET', '/blog');
        $this->assertTrue($response->isOk(), "l'appel de la view à échoué");
    }
}
