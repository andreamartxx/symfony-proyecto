<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColeccionController extends AbstractController
{
    //METODO FICHA, BUSCAR

    /**
     * @Route("/coleccion", name="coleccion")
     */
    public function index(): Response
    {
        return $this->render('coleccion/index.html.twig', [
            'controller_name' => 'ColeccionController',
        ]);
    }

    /**
     * @Route("/coleccion/{id}", name="coleccion")
     */
    public function coleccion(): Response{

        return $this->render("/coleccion/lista_colecciones.html.twig");

    }
    
}
