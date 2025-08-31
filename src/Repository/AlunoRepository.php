<?php

namespace App\Repository;

use App\Entity\Aluno;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Aluno>
 */
class AlunoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aluno::class);
    }

    public function findBySearch($value): array{
        return $this->createQueryBuilder('a')
            ->andWhere('a.nome_aluno like :val')
            ->setParameter('val', '%' . $value . '%')
            ->orderBy('a.nome_aluno', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    //    /**
    //     * @return Aluno[] Returns an array of Aluno objects
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

    //    public function findOneBySomeField($value): ?Aluno
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
