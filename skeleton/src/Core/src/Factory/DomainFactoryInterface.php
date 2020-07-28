<?php

declare(strict_types=1);

namespace Skeleton\Core\Factory;

use Skeleton\User\Domain\Entity\UserModelInterface;

/**
 * Interface DomainFactoryInterface
 * @package Skeleton\Core\Factory
 */
interface DomainFactoryInterface
{
    /**
     * @param array $data
     * @return UserModelInterface
     */
    public function create(array $data): UserModelInterface;
}
