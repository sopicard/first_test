<?php

namespace App\Controller;

//j'ai bien mes routes correspondantes aux classes utilisées
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstTest extends AbstractController
// la deuxième classe parent me permet de faire hériter la première de toutes ses méthodes

{
// me route vers la page home
    /**
     * @Route("/", name="home")
     */
//la méthode correspondant à la route juste au-dessus
    public function home()
    {
//je crée une variable pour pouvoir travailler le résultat final et affiché, au préalable dans mon fichier html.twig
    $name = "Sophie";
//this faisant référence à la classe dans laquelle il est +héritages et ciblant une fonction particulière,
//ici : le lien avec notre fichier html.twig
    return $this->render("first_test.html.twig",[
        "name"=>$name]);



    }
}

