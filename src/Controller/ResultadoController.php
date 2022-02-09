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
     * @Route("/resultado/uploadAzulejo", name="resultado")
     */
    public function index(ManagerRegistry $doctrine)
    {

        $entityManager = $doctrine->getManager();

        $resultado = new Resultado();
    
        $json = file_get_contents('php://input');
        $resultData = json_decode($json, false);

        print_r($resultData);
        
        $user = $this->getUser();
        $resultado->setUser($user);
        $resultado->setAzulejoSeleccionado($resultData->azulejoSeleccionado);
        $resultado->setSuperficie($resultData->superficie);
        $resultado->setNumAzulejo($resultData->numAzulejo);
        $resultado->setAzulejoMetro($resultData->azulejoMetro);
        $resultado->setNumCaja($resultData->numCaja);
        $resultado->setAzulejoCaja($resultData->azulejoCaja);
        
        $entityManager->persist($resultado);

        try{
            $entityManager->flush();
            return new Response ("Todo ha ido bien");
        }catch(\Exception $e){
            return new Response ("Algo ha ido regular");
        }

    }

}
