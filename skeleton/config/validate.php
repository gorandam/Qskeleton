<?php

declare(strict_types=1);

return [
    'email' => \Skeleton\User\Domain\Validator\EmailValidator::class,
    'password' => \Skeleton\User\Domain\Validator\PasswordValidator::class,
    'password2' => \Skeleton\User\Domain\Validator\PasswordRepeatValidator::class,
    'register' => \Skeleton\User\Domain\Validator\UserNormalizationValidator::class,
];
