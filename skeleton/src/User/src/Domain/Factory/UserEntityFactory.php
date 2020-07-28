<?php
declare(strict_types=1);

namespace Skeleton\User\Domain\Factory;

use Skeleton\Core\Factory\AbstractDomainFactory;
use Skeleton\User\Domain\Entity\User;


/**
 * Class UserEntityFactory
 * @package Skeleton\User\Domain\Factory
 */
class UserEntityFactory extends AbstractDomainFactory
{
    /**
     * @inheritDoc
     */
    protected function getClassName(): string
    {
        return User::class;
    }
}
