<?php

declare(strict_types=1);

namespace Skeleton\Core\Notification\Factory;

use Skeleton\Core\Notification\NotificationInterface;
use Skeleton\Core\Notification\SmsNotification;
use Psr\Container\ContainerInterface;

/**
 * Class SmsNotificationFactory
 * @package Skeleton\Core\Notification\Factory
 */
class SmsNotificationFactory
{

      /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * NotificationFactory constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return NotificationInterface
     */
    public function create(): NotificationInterface
    {
        return new SmsNotification();
    }
}
