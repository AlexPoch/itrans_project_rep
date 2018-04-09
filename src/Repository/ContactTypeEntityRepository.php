<?php

namespace App\Repository;

use App\Entity\ContactTypeEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactTypeEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactTypeEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactTypeEntity[]    findAll()
 * @method ContactTypeEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactTypeEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactTypeEntity::class);
    }

//    /**
//     * @return ContactTypeEntity[] Returns an array of ContactTypeEntity objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactTypeEntity
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
