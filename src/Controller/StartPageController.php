<?php
/**
 * Created by PhpStorm.
 * User: Jessica
 * Date: 07.03.2018
 * Time: 10:03
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StartPageController extends AbstractController
{
    public function welcome() {
        $title = "hello";
        $title = "Willkommen bei Sultana";
        return $this->render('pages/homepage.html.twig', [
            'title' => $title,
        ]);
    }

}