<?php

namespace App\Entity\References;

use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\ApiResource;
use App\State\ApplicantStatusDataProvider;

#[
    ApiResource(operations: [
        new Get(
            provider: ApplicantStatusDataProvider::class,
            openapiContext: ['tags' => ['References by id']]
        ),
        new GetCollection(
            provider: ApplicantStatusDataProvider::class,
            openapiContext: ['tags' => ['References']]
        )
    ])
]
class ApplicantStatus extends Reference
{
    public const ACTIVE = 'active';
    public const IN_RESEARCH = 'in_research';
    public const NOT_LOOKING = 'not_looking';
    public const ARCHIVED = 'archived';
    public const APPLICANT_STATUSES = [
        [
            'slug' => self::ACTIVE,
            'label' => 'active'
        ],
        [
            'slug' => self::IN_RESEARCH,
            'label' => 'in_research'
        ],
        [
            'slug' => self::NOT_LOOKING,
            'label' => 'not_looking'
        ],
        [
            'slug' => self::ARCHIVED,
            'label' => 'archived'
        ]
    ];

    public static function isApplicantStatus(array $statusSlugs): bool
    {
        return !empty(array_intersect($statusSlugs, array_column(self::APPLICANT_STATUSES, 'slug')));
    }
}
