<?php

namespace App\Controller;

use App\Entity\Azulejo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Coleccion;

class AzulejoController extends AbstractController
{
    private $azulejos = [

        1 => ["nombre" => "FS Raku", "descripcion" => "a", "alto" => "20","ancho" => "40"],
        2 => ["nombre" => "Poitiers blanco", "descripcion" => "a", "alto" => "7.5", "ancho" => "30"],
        3 => ["nombre" => "Ground decorativo", "descripcion" => "a", "alto" => "30", "ancho" => "30"],
        4 => ["nombre" => "Ground Mila warm", "descripcion" => "a", "alto" => "60", "ancho" => "60"],
        5 => ["nombre" => "Essence anti slip", "descripcion" => "a", "alto" => "19.5", "ancho" => "121.5"],
        6 => ["nombre" => "Mumble Barcelos", "descripcion" => "a", "alto" => "15", "ancho" => "90"],
        7 => ["nombre" => "Brass Rectificado", "descripcion" => "a", "alto" => "60", "ancho" => "60"],
        8 => ["nombre" => "Brass Decorativo", "descripcion" => "a", "alto" => "30", "ancho" => "30"],
        9 => ["nombre" => "Nature decorativo", "descripcion" => "a", "alto" => "30", "ancho" => "30"],
        10 => ["nombre" => "Adrenaline", "descripcion" => "a", "alto" => "45.6", "ancho" => "67.5"],
        11 => ["nombre" => "FS Star", "descripcion" => "a", "alto" => "45", "ancho" => "45"],
        12 => ["nombre" => "FS Yard", "descripcion" => "a", "alto" => "45", "ancho" => "45"]
    ];

    /**
     * @Route("/azulejo/{codigo}", name="ficha_azulejo")
     */
    public function ficha_azulejo(ManagerRegistry $doctrine, $codigo): Response{

        $repositorio = $doctrine->getRepository(Azulejo::class);
        $azulejo = $repositorio->find($codigo);

        return $this->render('ficha_azulejo.html.twig', ['azulejo' => $azulejo]);

    }

    /**
     *
     *@Route("/azulejo/buscar/{texto}", name="buscar_azulejo")
     */
    public function buscar (ManagerRegistry $doctrine, $texto): Response{

        $repositorio = $doctrine->getRepository(Azulejo::class);
        $azulejos = $repositorio->findByName($texto);

        return $this->render('lista_azulejo.html.twig', ['azulejos'=>$azulejos]);

    }

    /**
     * @Route("/azulejo", name="azulejo")
     */
    public function lista_azulejo(ManagerRegistry $doctrine): Response
    {
        
        $repositorio = $doctrine->getRepository(Azulejo::class);
        $azulejos = $repositorio->findAll();

        return $this->render('lista_azulejo.html.twig', ['azulejos' => $azulejos]);
     }
     /**
     * 
     * @Route ("/tooltip/{id}", name="tooltip")
     */
    public function tooltip(ManagerRegistry $doctrine, $id){
            $repositorio = $doctrine->getRepository(Azulejo::class);
            $azulejo = $repositorio->find($id);
        
            $info = [
                "nombre"=> $azulejo->getNombre(),
                "descripcion"=> $azulejo->getDescripcion(),
                "alto"=> $azulejo->getAlto(),
                "ancho"=> $azulejo->getAncho()
            ];

            return new Response(print_r($info));
        }
}
