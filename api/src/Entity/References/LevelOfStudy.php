<?php

namespace App\Entity\References;

use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\ApiResource;
use App\State\LevelOfStudyDataProvider;

#[
    ApiResource(operations: [
        new Get(
            provider: LevelOfStudyDataProvider::class,
            openapiContext: ['tags' => ['References by id']]
        ),
        new GetCollection(
            provider: LevelOfStudyDataProvider::class,
            openapiContext: ['tags' => ['References']]
        )
    ])
]
class LevelOfStudy extends Reference
{
    public const UNSPECIFIED = 'non-precise';
    public const CAP_BEP = 'cap-bep';
    public const BAC = 'bac';
    public const BAC_1 = 'bac+1';
    public const BAC_2 = 'bac+2';
    public const BAC_3 = 'bac+3';
    public const BAC_4 = 'bac+4';
    public const BAC_5 = 'bac+5';
    public const BAC_6 = 'bac+6';
    public const BAC_7 = 'bac+7';
    public const BAC_8 = 'bac+8';
    public const LEVEL_OF_STUDIES = [
        [
            'slug' => self::UNSPECIFIED,
            'label' => 'Non précisé'
        ],
        [
            'slug' => self::CAP_BEP,
            'label' => 'Cap BEP'
        ],
        [
            'slug' => self::BAC,
            'label' => 'BAC'
        ],
        [
            'slug' => self::BAC_1,
            'label' => 'BAC + 1'
        ],
        [
            'slug' => self::BAC_2,
            'label' => 'BAC + 2'
        ],
        [
            'slug' => self::BAC_3,
            'label' => 'BAC + 3'
        ],
        [
            'slug' => self::BAC_4,
            'label' => 'BAC + 4'
        ],
        [
            'slug' => self::BAC_5,
            'label' => 'BAC + 5'
        ],
        [
            'slug' => self::BAC_6,
            'label' => 'BAC + 6'
        ],
        [
            'slug' => self::BAC_7,
            'label' => 'BAC + 7'
        ],
        [
            'slug' => self::BAC_8,
            'label' => 'BAC + 8'
        ]
    ];

    public static function isLevelOfStudy($levelOfStudySlug)
    {
        return in_array($levelOfStudySlug, array_column(self::LEVEL_OF_STUDIES, 'slug'));
    }
}
