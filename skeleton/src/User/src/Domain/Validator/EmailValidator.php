<?php
declare(strict_types=1);

namespace Skeleton\User\Domain\Validator;

use Skeleton\Core\Adapter\Email\EmailValidatorServiceInterface;
use Skeleton\Core\Validator\AbstractValidator;

/**
 * Class EmailValidator
 * @package Skeleton\User\Validator
 */
class EmailValidator extends AbstractValidator
{

    /**
     * @var EmailValidatorServiceInterface
     */
    private $emailValidationService;

    /**
     * EmailValidator constructor.
     * @param EmailValidatorServiceInterface $emailValidationService
     */
    public function __construct(EmailValidatorServiceInterface $emailValidationService)
    {
        $this->emailValidationService = $emailValidationService;
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function handleValidation($data)
    {
        if (empty($data['email'])) {
            throw new \Exception('Email field is empty!');
        }

        if (!$this->emailValidationService->isValid($data['email'])) {
            throw new \Exception('Email is not valid!');
        }

        return $this->next($data);
    }
}
