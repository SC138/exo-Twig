<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class bonjourController
{
    /**
     * @Route("bonjour", name="bonjour")
     */


    public function bonjour () {
        dd('bonjour');
    }
}