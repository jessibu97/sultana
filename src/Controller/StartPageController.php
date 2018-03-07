<?php
/**
 * Created by PhpStorm.
 * User: Jessica
 * Date: 07.03.2018
 * Time: 10:03
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class StartPageController
{
    /**
     * @Route("/")
     */
    public function welcome() {
        return new Response('Willkommen bei Sultana!');
    }

}