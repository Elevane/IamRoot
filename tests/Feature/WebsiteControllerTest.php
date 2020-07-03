<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class WebsiteControllerTest extends TestCase
{
    /**
     * test la méthode qui retourne la vue de l'index
     *  @return void
     */
    public function testindexAction(){

        $response = $this->call('GET', '/');
        $this->assertTrue($response->isOk(), "l'appel de la view à échoué");
    }


    /**
     * test la méthode qui retourne la vue de contact
     *  @return void
     */
    public function testContactAction(){

        $response = $this->call('GET', '/contact');
        $this->assertTrue($response->isOk(), "l'appel de la view à échoué");
    }


    /**
     * test la méthode qui retourne la vue de "about"
     *  @return void
     */
    public function testAboutAction(){

        $response = $this->call('GET', '/about');
        $this->assertTrue($response->isOk(), "l'appel de la view à échoué");
    }


     /**
     * test la méthode qui retourne la vue de tutorials
     *  @return void
     */
    public function testTutorialsAction(){

        $response = $this->call('GET', '/tutorials');
        $this->assertTrue($response->isOk(), "l'appel de la view à échoué");
    }

     /**
     * test la méthode qui retourne la vue de l'index
     *  @return void
     */
    public function testPlansAction(){

        $response = $this->call('GET', '/plans');
        $this->assertTrue($response->isOk(), "l'appel de la view à échoué");
    }



    /**
     * test pour savoir si le fichier peut être lu
     */
    public function testPdfisredable(){
        $file = 'public/pdf/laravel.pdf';
        $this->assertFileIsReadable($file, "le fichier ne peut être lu");
    }


    /**
     * @todo
     * test si la methoide du formulaire de cotnact fonctionne bien
     */
    public function testContactForm(){

    }





}
