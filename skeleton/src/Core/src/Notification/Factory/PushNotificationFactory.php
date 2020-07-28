<?php

declare(strict_types=1);

namespace Skeleton\Core\Notification\Factory;

use Skeleton\Core\Notification\NotificationInterface;
use Skeleton\Core\Notification\PushNotification;
use Psr\Container\ContainerInterface;

/**
 * Class PushNotificationFactory
 * @package Skeleton\Core\Notification\Factory
 */
class PushNotificationFactory
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
        return new PushNotification();
    }
}
