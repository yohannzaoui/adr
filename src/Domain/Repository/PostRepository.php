<?php


namespace App\Domain\Repository;


use App\Domain\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * Class PostRepository
 *
 * @package App\Domain\Repository
 */
class PostRepository extends ServiceEntityRepository
{
    /**
     * PostRepository constructor.
     *
     * @param \Doctrine\Common\Persistence\ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }
}