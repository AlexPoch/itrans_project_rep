<?php

namespace App\Repository;

use App\Entity\QuizesQuestions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuizesQuestions|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuizesQuestions|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuizesQuestions[]    findAll()
 * @method QuizesQuestions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuizesQuestionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuizesQuestions::class);
    }

//    /**
//     * @return QuizesQuestions[] Returns an array of QuizesQuestions objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuizesQuestions
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
