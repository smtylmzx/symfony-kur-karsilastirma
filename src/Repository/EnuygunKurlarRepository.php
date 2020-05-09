<?php

namespace App\Repository;

use App\Entity\ProviderExchange;
use Doctrine\ORM\EntityRepository;

/**
 * @method ProviderExchange|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProviderExchange|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProviderExchange[]    findAll()
 * @method ProviderExchange[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnuygunKurlarRepository extends EntityRepository
{
//    public function __construct(RegistryInterface $registry)
//    {
//        parent::__construct($registry, EnuygunKurlar::class);
//    }

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
