<?php

declare(strict_types=1);

namespace Skeleton\Student\Domain\Repository;


interface StudentRepositoryInterface
{
    /**
     * Fetches a single Student model by id.
     *
     * @param $studentId
     * @return array
     */
    public function fetchById($studentId);

}
