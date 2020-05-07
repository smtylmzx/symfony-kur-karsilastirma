<?php

namespace App\Repository;

use App\Entity\EnuygunKurlar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EnuygunKurlar|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnuygunKurlar|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnuygunKurlar[]    findAll()
 * @method EnuygunKurlar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnuygunKurlarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EnuygunKurlar::class);
    }

    // /**
    //  * @return EnuygunKurlar[] Returns an array of EnuygunKurlar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnuygunKurlar
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
