<?php

namespace App\Repository;

use App\Entity\Coleccion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Coleccion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coleccion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coleccion[]    findAll()
 * @method Coleccion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ColeccionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coleccion::class);
    }

    public function findByName($text): array{

        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT c FROM App\Entity\Coleccion c WHERE c.nombre LIKE :text'
        )->setParameter('text', '%' .$text . '%');

        return $query->execute();

    }

}
