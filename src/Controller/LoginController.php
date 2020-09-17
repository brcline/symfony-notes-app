<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use src\Entity\User;


class LoginController extends AbstractController {

    /**
    * @Route("/login")
    */
    public function index()
    {
        return $this->render('login.html.twig', []);
    }

    public function signin(ValidatorInterface $validator): Response
        // TODO:
    }

    /**
    * @Route("/login/signup")
    */
    public function signup(ValidatorInterface $validator): Response
    {
        $user = new User();

        $errors = $validator->validate($user);

        $errors = $validator->validate($product);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }


        return $this->render('signup.html.twig', []);
    }
}