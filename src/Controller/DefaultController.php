<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {
    /**
    * @Route("/login/index")
    */
    public function index() {

        return $this->render('index.html.twig', []);
    }
}