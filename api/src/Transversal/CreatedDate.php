<?php

namespace App\Transversal;

use App\Utils\Utils;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait for using CreatedDate
 */
trait CreatedDate
{
    /**
     * Date when CompanyGroup was created
     *
     */
    #[ORM\Column(type: "datetime", options: ["default" => 'CURRENT_TIMESTAMP'])]
    private ?\DateTime $createdDate;

    public function getCreatedDate(): ?\DateTime
    {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTime|string|null $createdDate): self
    {
        if (is_string($createdDate)) {
            $createdDate = Utils::createDateTimeFromString($createdDate);
        }

        $this->createdDate = $createdDate;

        return $this;
    }

    public function hasCreatedDate(): bool
    {
        return $this->getCreatedDate() instanceof \DateTime;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedDateBeforePersist(): void
    {
        if (!$this->hasCreatedDate()) {
            $this->setCreatedDate(new \DateTime());
        }
    }
}
