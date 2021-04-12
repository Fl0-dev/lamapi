<?php

namespace App\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid as SFUuid;

/**
 * Trait for using Uuid
 */
trait Uuid
{
    /**
     * Uuid Property
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     */
    private ?SFUuid $id = null;

    /**
     * Get Uuid value
     */
    public function getId(): ?SFUuid
    {
        return $this->id;
    }

    /**
     * Set Uuid value
     */
    public function setId(SFUuid $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Check if Uuid has a valid value
     */
    public function hasId(): bool
    {
        return $this->id instanceof SFUuid;
    }
}
