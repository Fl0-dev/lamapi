<?php

namespace App\Repository\CompanyRepositories;

use App\Entity\Company\CompanyEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompanyEntity>
 *
 * @method CompanyEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanyEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanyEntity[]    findAll()
 * @method CompanyEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompanyEntity::class);
    }

    public function add(CompanyEntity $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CompanyEntity $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
