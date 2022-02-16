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
    
}
