<?php

namespace App\Repository;

use App\Entity\FIZZBUZZ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FIZZBUZZ>
 *
 * @method FIZZBUZZ|null find($id, $lockMode = null, $lockVersion = null)
 * @method FIZZBUZZ|null findOneBy(array $criteria, array $orderBy = null)
 * @method FIZZBUZZ[]    findAll()
 * @method FIZZBUZZ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FIZZBUZZRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FIZZBUZZ::class);
    }

    public function add(FIZZBUZZ $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FIZZBUZZ $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FIZZBUZZ[] Returns an array of FIZZBUZZ objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FIZZBUZZ
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
