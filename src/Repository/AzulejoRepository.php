<?php

namespace App\Repository;

use App\Entity\Azulejo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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

    // /**
    //  * @return Azulejo[] Returns an array of Azulejo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Azulejo
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
