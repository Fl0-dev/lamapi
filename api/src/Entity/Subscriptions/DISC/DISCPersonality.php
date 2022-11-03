<?php

namespace App\Entity\Subscriptions\DISC;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SubscriptionRepositories\DISC\DISCPersonalityRepository;
use App\Transversal\Label;
use App\Transversal\Slug;
use App\Transversal\Uuid;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DISCPersonalityRepository::class)]
#[ApiResource]
class DISCPersonality
{
    use Uuid;
    use Label;
    use Slug;

    #[ORM\Column(length: 6)]
    private ?string $color = null;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}