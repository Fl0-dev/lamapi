<?php

namespace App\Repository\MediaRepositories;

use App\Entity\Media\MediaVideo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MediaVideo>
 *
 * @method MediaVideo|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaVideo|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaVideo[]    findAll()
 * @method MediaVideo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaVideoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaVideo::class);
    }

    public function add(MediaVideo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MediaVideo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
