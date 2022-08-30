<?php

namespace App\Entity\References;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Transversal\Label;
use App\Transversal\Slug;
use Symfony\Component\Uid\Uuid;

#[ApiResource(
    collectionOperations: [
        'get' => [
            'method' => 'GET',
            'openapi_context' => [
                'tags' => ['References'],
            ],
        ],
    ],
    itemOperations: [
        'get' => [
            'controller' => NotFoundAction::class,
            'read' => false, // pour supprimer la lecture
            'output' => false, // pour supprimer la sortie
            'openapi_context' => [
                'summary' => 'hidden', //Indique le summary à supprimer avec openapiFactory  
            ]
        ],
    ]
)]
class ApplicationStatus
{
    const NEW = 'new';
    const IN_PROGRESS = 'in_progress';
    const APPROVED = 'approved';
    const REJECTED = 'rejected';
    const ARCHIVED = 'archived';

    const APPLICATION_STATUSES = [
        [
            'slug' => self::NEW,
            'label' => 'Nouvelle candidature'
        ],
        [
            'slug' => self::IN_PROGRESS,
            'label' => 'En traitement'
        ],
        [
            'slug' => self::APPROVED,
            'label' => 'Approuvée'
        ],
        [
            'slug' => self::REJECTED,
            'label' => 'Rejetée'
        ],
        [
            'slug' => self::ARCHIVED,
            'label' => 'Archivée'
        ],
    ];

    #[ApiProperty(identifier: true)]
    private $id;

    use Slug;
    use Label;

    public function __construct(string $slug, string $label)
    {
        $this->id = Uuid::v3(Uuid::fromString(Uuid::NAMESPACE_URL), $slug);
        $this->slug = $slug;
        $this->label = $label;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
