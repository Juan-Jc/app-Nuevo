<?php

namespace App\Controller;

use App\Model\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function home():Response{
        $juan = new Usuario('juan','puerta','ospina','juan@admin.com',999999999,'1234');
        return $this->render('plantillas/home.html.twig', ['nombre'=> $juan->getNombre(),
    ]);
    }
}
