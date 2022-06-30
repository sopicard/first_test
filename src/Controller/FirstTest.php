<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstTest extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function home()
    {
    return new Response("Bonjour");
    }
}