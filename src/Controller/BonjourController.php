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
        $name = 'Tom';
        return $this->render ('home.html.twig', [
            'name' => $name
        ]);
    }

}