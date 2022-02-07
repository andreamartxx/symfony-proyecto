<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Resultado;

class ResultadoController extends AbstractController
{
    /**
     * @Route("/resultado/uploadAzulejo/{data}", name="resultado")
     */
    public function index($data): Response
    {
        return $this->render('resultado/index.html.twig', [
            'controller_name' => 'ResultadoController',
        ]);
    }

    

}
