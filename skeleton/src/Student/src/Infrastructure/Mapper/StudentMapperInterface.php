<?php

declare(strict_types=1);

namespace Skeleton\Student\Infrastructure\Mapper;

/**
 * Interface StudentMapperInterface
 * @package Skeleton\Student\Infrastructure\Mapper
 */
interface StudentMapperInterface
{
    /**
     * Fetches a single User model.
     *
     * @param string $studentId
     *
     * @return array
     */
    public function fetchSingle(string $studentId);

}
