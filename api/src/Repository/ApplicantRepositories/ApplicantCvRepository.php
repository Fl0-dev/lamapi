<?php

namespace App\Repository\ApplicantRepositories;

use App\Entity\Applicant\ApplicantCv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ApplicantCv>
 *
 * @method ApplicantCv|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApplicantCv|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApplicantCv[]    findAll()
 * @method ApplicantCv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApplicantCvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApplicantCv::class);
    }

    public function add(ApplicantCv $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ApplicantCv $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
