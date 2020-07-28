<?php
declare(strict_types=1);

namespace Skeleton\Core\Validator;

/**
 * Class ValidatorInterface
 *
 */
interface ValidatorInterface
{
    /**
     * Validates provided data and sets errors with flash in session.
     * @param array $data
     * @return bool
     */
    public function isValid(array $data): bool;
}
