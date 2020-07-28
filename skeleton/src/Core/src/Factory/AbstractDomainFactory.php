<?php

declare(strict_types=1);

namespace Skeleton\Core\Factory;

use Skeleton\User\Domain\Entity\UserModelInterface;

/**
 * Class AbstractDomainFactory
 * @package Skeleton\Core\Factory
 */
abstract class AbstractDomainFactory implements DomainFactoryInterface
{

    /**
     * @param array $data
     * @return UserModelInterface
     */
    public function create(array $data): UserModelInterface
    {
        $class = $this->getClassName();
        $domainModel = new $class();
        $domainModel->exchangeArray($data);

        return $domainModel;
    }

    /**
     * @return string
     */
    abstract protected function getClassName(): string;
}
