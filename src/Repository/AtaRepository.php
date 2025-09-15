<?php

namespace App\Repository;

use App\Entity\Ata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ata>
 */
class AtaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ata::class);
    }

        public function findByDateToday($today): ?array
        {
            return $this->createQueryBuilder('a')
                ->andWhere('a.data = :data')
                ->setParameter('data', $today)
                ->orderBy('a.id', 'ASC')
                ->getQuery()
                ->getResult()
            ;
        }

    //    /**
    //     * @return Ata[] Returns an array of Ata objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Ata
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
