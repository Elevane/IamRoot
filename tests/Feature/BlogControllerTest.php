



<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class BlogControllerTest extends TestCase
{

    /**
     * test la méthode qui retourne la vue de l'index
     *  @return void
     */
    public function testBlogAction(){

        $response = $this->call('GET', '/blog');
        $this->assertTrue($response->isOk(), "l'appel de la view à échoué");
    }
}
