<?php
declare(strict_types=1);

return [
    'email' => \Kptask\User\Domain\Validator\EmailValidator::class,
    'password' => \Kptask\User\Domain\Validator\PasswordValidator::class,
    'password2' => \Kptask\User\Domain\Validator\PasswordRepeatValidator::class,
    'register' => \Kptask\User\Domain\Validator\UserNormalizationValidator::class,
];
