<?php

declare(strict_types=1);

namespace Skeleton\Core\Notification;

/**
 * Interface NotificationInterface
 * @package Skeleton\Core\Notification
 */
interface NotificationInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function send($data);
}
