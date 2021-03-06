<?php
declare(strict_types=1);

namespace Skeleton\User\Domain\Validator;

use Skeleton\Core\Adapter\Email\EmailValidatorServiceInterface;
use Skeleton\User\Domain\Repository\UserRepositoryInterface;
use Skeleton\Core\Validator\AbstractValidationManager;
use Skeleton\Core\Validator\AbstractValidator;
use Tamtamchik\SimpleFlash\Flash;

/**
 * Class UserValidationManager
 * @package Skeleton\User\Validator
 */
class UserValidationManager extends AbstractValidationManager
{

    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * @var EmailValidatorServiceInterface
     */
    private $emailValidatorService;


    /**
     * UserValidationManager constructor.
     * @param UserRepositoryInterface $userRepository
     * @param array $valConfig
     * @param EmailValidatorServiceInterface $emailValidatorService
     */
    public function __construct(UserRepositoryInterface $userRepository, array $valConfig, EmailValidatorServiceInterface $emailValidatorService)
    {
        $this->userRepository = $userRepository;
        $this->emailValidatorService = $emailValidatorService;
        parent::__construct($valConfig);
    }

    /**
     * @param string $validatorClass
     * @return AbstractValidator
     */
    protected function validatorFactory(string $validatorClass): AbstractValidator
    {
        $parts = explode('\\', $validatorClass);
        $shortClassName = end($parts);
        if ($shortClassName === 'EmailValidator') {
            return new $validatorClass($this->emailValidatorService);
        }

        if ($shortClassName === 'UserNormalizationValidator') {
            return new $validatorClass($this->userRepository);
        }

        return new $validatorClass();
    }
}
