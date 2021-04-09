<?php

namespace App\Entity\Localisation;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Trait\UseSlug;
use App\Trait\UseUuid;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Localisation: Department
 *
 * @ORM\Entity
 */
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class Department
{
    use UseUuid;
    use UseSlug;

    /**
     * Department Region
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Localisation\Region", inversedBy="departments")
     */
    private $region = null;

    /**
     * Department Cities
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Localisation\City", mappedBy="department")
     */
    private ?ArrayCollection $cities = null;

    /**
     * Department Code
     *
     * @ORM\Column(type="string")
     */
    private ?string $code = null;

    /**
     * Department Name
     *
     * @ORM\Column(type="string")
     */
    private ?string $name = null;

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * Get Cities of the Department
     */
    public function getCities(): ?ArrayCollection
    {
        return $this->cities;
    }

    /**
     * Set Cities of the Department
     */
    public function setCities(?ArrayCollection $cities): self
    {
        $this->cities = $cities;

        return $this;
    }

    /**
     * Get Region of the Department
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set Region of the Department
     */
    public function setRegion($region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get the value of Code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Set the value of Code
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Check if has a valid Code
     */
    public function hasCode(): bool
    {
        $code = $this->getCode();

        return is_string($code) && strlen($code) > 0;
    }

    /**
     * Get the Name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the Name
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Check if has a valid Name
     */
    public function hasName(): bool
    {
        $name = $this->getName();

        return is_string($name) && strlen($name) > 0;
    }
}