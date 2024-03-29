<?php

namespace App\Repository\ReferencesRepositories;

use App\Entity\References\ContractType;
use App\Utils\Utils;

class ContractTypeRepository
{
    /**
     * @return ContractType[]
     */
    public function findAll(): array
    {
        $contractTypes = [];
        $arrayContractTypes = ContractType::CONTRACT_TYPES;

        if (is_array($arrayContractTypes)) {
            foreach ($arrayContractTypes as $contractType) {
                $contractTypes[] = new ContractType(
                    Utils::getArrayValue('slug', $contractType),
                    Utils::getArrayValue('label', $contractType)
                );
            }
        }

        return $contractTypes;
    }

    public function findByKeywords($keywords): ?array
    {
        $contractTypes = $this->findAll();
        $results = [];

        if (is_array($contractTypes) && !empty($contractTypes)) {
            foreach ($contractTypes as $contractType) {
                if (strpos(strToLower($contractType->getLabel()), $keywords) !== false) {
                    $results[] = $contractType;
                }
            }
        }

        return $results;
    }

    public function find(string $id): ?ContractType
    {
        $contractTypes = $this->findAll();

        foreach ($contractTypes as $contractType) {
            if ($contractType->getId() === $id) {
                return $contractType;
            }
        }

        return null;
    }
}
