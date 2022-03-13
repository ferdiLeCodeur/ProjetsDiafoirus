<?php

namespace App\Repository;

use App\Entity\Storyboard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Storyboard|null find($id, $lockMode = null, $lockVersion = null)
 * @method Storyboard|null findOneBy(array $criteria, array $orderBy = null)
 * @method Storyboard[]    findAll()
 * @method Storyboard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StoryboardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Storyboard::class);
    }

    // /**
    //  * @return Storyboard[] Returns an array of Storyboard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Storyboard
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
