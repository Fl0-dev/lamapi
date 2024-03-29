<?php

namespace App\Entity\Revision;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\Company\CompanyGroup;
use App\Repository\RevisionRepositories\CompanyGroupRevisionRepository;
use App\Transversal\CreatedDate;
use App\Transversal\FieldContent;
use App\Transversal\FieldName;
use App\Transversal\Uuid;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: CompanyGroupRevisionRepository::class)]
class CompanyGroupRevision
{
    use Uuid;
    use CreatedDate;
    use FieldName;
    use FieldContent;

    #[ORM\ManyToOne(inversedBy: 'companyGroupRevisions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CompanyGroup $companyGroup = null;

    public function getCompanyGroup(): ?CompanyGroup
    {
        return $this->companyGroup;
    }

    public function setCompanyGroup(?CompanyGroup $companyGroup): self
    {
        $this->companyGroup = $companyGroup;

        return $this;
    }
}
