<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//j'ai bien mes routes correspondantes aux classes utilisées

// la deuxième classe parent me permet de faire hériter la première de toutes ses méthodes
class HomeController extends AbstractController
{
    // ma route vers la page home
    /**
     * @Route("/", name="home")
     */

    //la méthode correspondante à la route juste au-dessus
    public function home()
    {
        //je crée une variable pour pouvoir travailler le résultat final et affiché,
        //au préalable dans mon fichier html.twig
        $name = "Sophie";

        //this faisant référence à la classe dans laquelle il est +héritages et ciblant une fonction particulière,
        //ici : le lien avec notre fichier html.twig
        return $this->render("first_test.html.twig",[
        "name"=>$name]);
    }

    //je créé une nouvelle route pour mon tableau
    /**
     * @Route ("/category", name="category")
     */

    //j'associe la fonction "table" à ma route
    public function table()
    {
        //fake tableau qui viendrait de ma bdd
        $category = [
            'title' => 'Politique',
            'color' => 'red',
            'published' => false,
            'description' => 'Décrypter l\'actualité politique avec le prisme de David Robert'
        ];

        //même procédé que pour mon first-test mais en ayant créé un nouveau fichier twig qui
        //appelle le tableau complet
        return $this->render("table.html.twig",["category"=>$category]);
    }
}

