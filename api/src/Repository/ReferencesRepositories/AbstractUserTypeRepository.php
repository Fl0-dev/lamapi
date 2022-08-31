<?php

namespace App\Repository\ReferencesRepositories;

use App\Entity\References\AbstractUserType;
use App\Utils\Utils;

class AbstractUserTypeRepository
{

    /**
     * Undocumented function
     *
     * @return AbstractUserType[]
     */
    public function findAll(): array
    {
        $abstractUserTypes = [];
        $arrayAbstractUserTypes = AbstractUserType::USER_TYPES;

        foreach ($arrayAbstractUserTypes as $abstractUserType) {
            $abstractUserTypes[] = new AbstractUserType(Utils::getArrayValue('slug', $abstractUserType), Utils::getArrayValue('label', $abstractUserType));
        }

        return $abstractUserTypes;
    }
}
