<?php

namespace App\Repository\RevisionRepositories;

use App\Entity\Revision\CompanyProfileRevision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompanyProfileRevision>
 *
 * @method CompanyProfileRevision|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanyProfileRevision|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanyProfileRevision[]    findAll()
 * @method CompanyProfileRevision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyProfileRevisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompanyProfileRevision::class);
    }

    public function add(CompanyProfileRevision $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CompanyProfileRevision $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
