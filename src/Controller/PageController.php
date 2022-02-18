<?php

namespace App\Controller;

use App\Entity\Comentario;
use Doctrine\DBAL\Driver\IBMDB2\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Usuario;
use Doctrine\Persistence\ManagerRegistry;

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

        return $this->render("calculo.html.twig");

    }

     /**
     * 
     * @Route("/contacto", name="contacto")
     */
    public function contacto(ManagerRegistry $doctrine, Request $request): Response{

        $comentario = new Comentario();

        $formulario = $this->createFormBuilder($comentario)
            ->add('contenido', TextareaType::class)
            ->add('enviar', SubmitType::class, array('label'=>'Enviar'))
            ->getForm();
        
        $formulario->handleRequest($request);

        if($formulario->isSubmitted() && $formulario->isValid()){
            $comentario = $formulario->getData();
            $entityManager = $doctrine->getManager();
            $comentario->setUser($this->getUser());
            $entityManager->persist($comentario);
            $entityManager->flush();
            return $this->redirectToRoute('contacto', [$comentario->getContenido()]);
        }

        return $this->render("contacto.html.twig", array(
            'formulario' => $formulario->createView()
        ));

    }

     /**
     * 
     * @Route("/galeria", name="galeria")
     */
    public function galeria(): Response{

        return $this->render("galeria.html.twig");

    }

    /**
     * 
     * @Route("/terminos", name="terminos")
     * 
     */
    public function terminos(): Response{
        return $this->render("terminos.html.twig");
    }
 
    /**
     * 
     * @Route("/privacidad", name="privacidad")
     */
    public function privacidad(): Response{
        return $this->render("privacidad.html.twig");
    }
}


