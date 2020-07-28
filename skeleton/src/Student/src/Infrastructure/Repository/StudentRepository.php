<?php

declare(strict_types=1);

namespace Skeleton\Student\Infrastructure\Repository;

use Skeleton\Student\Domain\Repository\StudentRepositoryInterface;
use Skeleton\Student\Infrastructure\Mapper\StudentMapperInterface;

class StudentRepository implements StudentRepositoryInterface
{
    /**
     * @var StudentMapperInterface
     */
    private $studentStorage;

    /**
     * StudentRepository constructor.
     * @param StudentMapperInterface $studentStorage
     */
    public function __construct(StudentMapperInterface $studentStorage)
    {
        $this->studentStorage = $studentStorage;
    }

    public function fetchById($studentId)
    {
        return $this->studentStorage->fetchSingle($studentId);
    }

    public function fetchGrades($studentId)
    {
        return $this->studentStorage->fetchGrades($studentId);
    }
}
