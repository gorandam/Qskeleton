<?php
declare(strict_types=1);

namespace Kptask\User\Domain\Factory;

use Kptask\Core\Factory\AbstractDomainFactory;
use Kptask\User\Domain\Entity\User;


/**
 * Class UserEntityFactory
 * @package Kptask\User\Domain\Factory
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
