<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Azulejo;
use App\Entity\Coleccion;

class ColeccionController extends AbstractController
{
       private $colecciones = [
        1 => "Blancos",
        2 => "Cementados",
        3 => "Maderas",
        4 => "Metal",
        5 => "Piedra",
        6 => "Vintage"
    ];

    /**
     * @Route("/coleccion", name="coleccion")
     */
    public function lista_colecciones(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine->getRepository(Coleccion::class);
        $colecciones = $repositorio->findAll();

        $repositorio2 = $doctrine->getRepository(Azulejo::class);
        $azulejo = $repositorio2->findAll();


        return $this->render('/coleccion/lista_coleccion.html.twig', ['colecciones' => $colecciones, 'azulejo'=> $azulejo]);
    }

}
