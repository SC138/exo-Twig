<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class BonjourController extends AbstractController
{
    /**
     * @Route("home", name="bonjour")
     */


    public function home () {

        $category = [
            'title' => 'Politique',
            'color' => 'red',
            'published' => true,
            'description' => "Decrypter l'actualité politique avec le prisme de David Robert"
        ];

        $name = 'Tom';

        return $this->render ('home.html.twig', [
            'name' => $name,
            'category' => $category
        ]);


    }



}