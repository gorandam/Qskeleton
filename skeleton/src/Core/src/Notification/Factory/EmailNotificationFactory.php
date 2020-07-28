<?php

declare(strict_types=1);

namespace Skeleton\Core\Notification\Factory;

use Skeleton\Core\Notification\EmailNotification;
use Skeleton\Core\Notification\NotificationInterface;
use Psr\Container\ContainerInterface;
use Zend\Mail\Message;
use Zend\Mail\Transport\Sendmail;

/**
 * Class EmailNotificationFactory
 * @package Skeleton\Core\Notification\Factory
 */
class EmailNotificationFactory
{  /**
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
        $emailService = $this->container->get(Message::class);
        $transportService = $this->container->get(Sendmail::class);
        return new EmailNotification($emailService, $transportService);
    }
}
