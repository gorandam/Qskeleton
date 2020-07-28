<?php

declare(strict_types=1);

namespace Skeleton\Core\Adapter\Email;

/**
 * Interface EmailValidatorServiceInterface
 * @package Skeleton\Core\Adapter\Email
 */
interface EmailValidatorServiceInterface
{
    /**
     * @param string $email
     * @return bool
     */
    public function isValid(string $email): bool;
}
