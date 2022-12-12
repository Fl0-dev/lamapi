<?php

namespace App\Entity\Subscriptions\Applicant\Lamatch;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use App\Controller\GetApplicantLamatchProfileByCurrentApplicant;
use App\Controller\PostApplicantLamatchProfile;
use App\Entity\Applicant\Applicant;
use App\Entity\Badge;
use App\Entity\ExpertiseField;
use App\Entity\JobTitle;
use App\Entity\Media\MediaImage;
use App\Entity\Subscriptions\DISC\DISCQuality;
use App\Entity\Tool;
use App\Repository\SubscriptionRepositories\Applicant\ApplicantLamatchProfileRepository;
use App\Transversal\CreatedDate;
use App\Transversal\LastModifiedDate;
use App\Transversal\Uuid;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ApplicantLamatchProfileRepository::class)]
#[ApiResource(operations: [
    new GetCollection(
        uriTemplate: '/applicants/lamatch-profile',
        controller: GetApplicantLamatchProfileByCurrentApplicant::class,
        normalizationContext: ['groups' => [self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT]],
        uriVariables: [],
        openapiContext: [
            'tags' => ['Applicant'],
            'summary' => 'Get applicant lamatch profile by current user',
        ],
    ),
    new Post(
        security: "is_granted('ROLE_APPLICANT')",
        controller: PostApplicantLamatchProfile::class,
        uriTemplate: '/applicants/lamatch-profile',
        uriVariables: [],
        deserialize: false,
        openapiContext: [
            'tags' => ['Applicant'],
            'summary' => 'Create applicant lamatch profile by current user',
            'requestBody' => [
                'content' => [
                    'multipart/form-data' => [
                        'schema' => [
                            'type' => 'object',
                            'properties' => [
                                'introduction' => [
                                    'type' => 'string',
                                    'format' => 'text'
                                ],
                                'linkedIn' => [
                                    'type' => 'string',
                                ],
                                'file' => [
                                    'type' => 'string',
                                    'format' => 'binary'
                                ],
                                'experience' => [
                                    'type' => 'string',
                                    'format' => 'uuid'
                                ],
                                'levelOfStudy' => [
                                    'type' => 'string',
                                    'format' => 'uuid'
                                ],
                                'jobTitle' => [
                                    'type' => 'string',
                                    'format' => 'uuid'
                                ],
                                'desiredWorkforce' => [
                                    'type' => 'string',
                                    'format' => 'uuid'
                                ],
                                'tools' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'format' => 'uuid'
                                    ]
                                ],
                                'desiredBadges' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'format' => 'uuid'
                                    ]
                                ],
                                'qualities' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'format' => 'uuid'
                                    ]
                                ],
                                'desiredExpertiseFields' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'format' => 'uuid'
                                    ]
                                ],
                                'desiredCities' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'format' => 'uuid'
                                    ]
                                ],
                                'desiredDepartments' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'format' => 'uuid'
                                    ]
                                ],
                            ]
                        ]
                    ]
                ]
            ]
        ],
    ),
])]
class ApplicantLamatchProfile
{
    use Uuid;
    use CreatedDate;
    use LastModifiedDate;

    public const OPERATION_NAME_POST_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT =
    'post_applicant_lamatch_profile_by_current_applicant';
    public const OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT =
    'get_applicant_lamatch_profile_by_current_applicant';

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?string $introduction;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?string $experience;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?string $levelOfStudy;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?MediaImage $photo;

    #[ORM\ManyToOne]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?JobTitle $jobTitle;

    #[ORM\ManyToMany(targetEntity: Tool::class, cascade: ['persist', 'remove'])]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private Collection $tools;

    #[ORM\ManyToMany(targetEntity: Badge::class, cascade: ['persist', 'remove'])]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private Collection $desiredBadges;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?Applicant $applicant;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?DesiredLocation $desiredLocation;

    #[ORM\ManyToMany(targetEntity: DISCQuality::class, cascade: ['persist', 'remove'])]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private Collection $qualities;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private ?string $desiredWorkforce;

    #[ORM\ManyToMany(targetEntity: ExpertiseField::class, cascade: ['persist', 'remove'])]
    #[Groups([self::OPERATION_NAME_GET_APPLICANT_LAMATCH_PROFILE_BY_CURRENT_APPLICANT])]
    private Collection $desiredExpertiseFields;

    public function __construct()
    {
        $this->tools = new ArrayCollection();
        $this->desiredBadges = new ArrayCollection();
        $this->qualities = new ArrayCollection();
        $this->desiredExpertiseFields = new ArrayCollection();
        $this->createdDate = new \DateTime();
        $this->lastModifiedDate = new \DateTime();
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(?string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getLevelOfStudy(): ?string
    {
        return $this->levelOfStudy;
    }

    public function setLevelOfStudy(?string $levelOfStudy): self
    {
        $this->levelOfStudy = $levelOfStudy;

        return $this;
    }

    public function getPhoto(): ?MediaImage
    {
        return $this->photo;
    }

    public function setPhoto(?MediaImage $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getJobTitle(): ?JobTitle
    {
        return $this->jobTitle;
    }

    public function setJobTitle(?JobTitle $jobTitle): self
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * @return Collection<int, Tool>
     */
    public function getTools(): Collection
    {
        return $this->tools;
    }

    public function addTool(Tool $tool): self
    {
        if (!$this->tools->contains($tool)) {
            $this->tools->add($tool);
        }

        return $this;
    }

    public function removeTool(Tool $tool): self
    {
        $this->tools->removeElement($tool);

        return $this;
    }

    /**
     * @return Collection<int, Badge>
     */
    public function getDesiredBadges(): Collection
    {
        return $this->desiredBadges;
    }

    public function addDesiredBadge(Badge $desiredBadge): self
    {
        if (!$this->desiredBadges->contains($desiredBadge)) {
            $this->desiredBadges->add($desiredBadge);
        }

        return $this;
    }

    public function removeDesiredBadge(Badge $desiredBadge): self
    {
        $this->desiredBadges->removeElement($desiredBadge);

        return $this;
    }

    public function getApplicant(): ?Applicant
    {
        return $this->applicant;
    }

    public function setApplicant(Applicant $applicant): self
    {
        $this->applicant = $applicant;

        return $this;
    }

    public function getDesiredLocation(): ?DesiredLocation
    {
        return $this->desiredLocation;
    }

    public function setDesiredLocation(?DesiredLocation $desiredLocation): self
    {
        $this->desiredLocation = $desiredLocation;

        return $this;
    }

    /**
     * @return Collection<int, DISCQuality>
     */
    public function getQualities(): Collection
    {
        return $this->qualities;
    }

    public function addQuality(DISCQuality $quality): self
    {
        if (!$this->qualities->contains($quality)) {
            $this->qualities->add($quality);
        }

        return $this;
    }

    public function removeQuality(DISCQuality $quality): self
    {
        $this->qualities->removeElement($quality);

        return $this;
    }

    public function getDesiredWorkforce(): ?string
    {
        return $this->desiredWorkforce;
    }

    public function setDesiredWorkforce(?string $desiredWorkforce): self
    {
        $this->desiredWorkforce = $desiredWorkforce;

        return $this;
    }

    /**
     * @return Collection<int, ExpertiseField>
     */
    public function getDesiredExpertiseFields(): Collection
    {
        return $this->desiredExpertiseFields;
    }

    public function addDesiredExpertiseField(ExpertiseField $desiredExpertiseField): self
    {
        if (!$this->desiredExpertiseFields->contains($desiredExpertiseField)) {
            $this->desiredExpertiseFields->add($desiredExpertiseField);
        }

        return $this;
    }

    public function removeDesiredExpertiseField(ExpertiseField $desiredExpertiseField): self
    {
        $this->desiredExpertiseFields->removeElement($desiredExpertiseField);

        return $this;
    }
}
