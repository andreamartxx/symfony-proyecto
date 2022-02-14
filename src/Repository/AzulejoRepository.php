<?php

namespace App\Repository;

use App\Entity\Azulejo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Func;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Azulejo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Azulejo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Azulejo[]    findAll()
 * @method Azulejo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AzulejoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Azulejo::class);
    }

    public function findByName($text): array{

        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT c FROM App\Entity\Azulejo c WHERE c.nombre LIKE :text'
        )->setParameter('text', '%' .$text . '%');

        return $query->execute();

    }

    /**
     * 
     * @Route ("/tooltip", name="tooltip")
     */
    public function tooltip(ManagerRegistry $doctrine, $id){
/*         $entityManager = $this->getEntityManager();
 */     $repositorio = $doctrine->getRepository(Azulejo::class);
        $azulejo = $repositorio->find($id);

       /*  $query = $entityManager->createQuery(
            'SELECT c FROM App\Entity\Azulejo c WHERE c.id='.$azulejo
        )->setParameter('id', '%' .$id . '%');

        return $query->execute(); */

        $select_query = "SELECT c FROM App\Entity\Azulejo c WHERE c.id=".$azulejo;

        $result = mysqli_query($azulejo, $select_query);

        $html = '<div>';
        while($row = mysqli_fetch_array($result)){
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $alto = $row['alto'];
            $ancho = $row['ancho'];

            $html .= "<span class='head'>Nombre: </span><span>".$nombre."</span><br/>";
            $html .= "<span class='head'>Descripción: </span><span>".$descripcion."</span><br/>";
            $html .= "<span class='head'>Alto(cm): </span><span>".$alto."</span><br/>";
            $html .= "<span class='head'>Ancho(cm): </span><span>".$ancho."</span><br/>";
        }
        $html .= '</div>';

        echo $html;
    }
    
}
