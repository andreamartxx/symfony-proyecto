<?php

namespace App\Controller;

use Doctrine\DBAL\Driver\IBMDB2\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * 
     * @Route("/", name="inicio")
     */
    public function inicio(): Response{

        return $this->render("index.html.twig");

    }

     /**
     * 
     * @Route("/calculo", name="calculo")
     */
    public function calculo(): Response{

        return $this->render("/partials/calculo.html.twig");

    }

 
}


