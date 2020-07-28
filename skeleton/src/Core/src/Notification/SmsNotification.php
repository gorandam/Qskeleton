<?php
declare(strict_types=1);

namespace Skeleton\Core\Notification;

/**
 * Class SmsNotification
 * @package Skeleton\Core\Notification
 */
class SmsNotification implements NotificationInterface
{
    private $smsService;

    /**
     * SmsNotification constructor.
     * @param null $smsService
     */
    public function __construct($smsService = null)
    {
        $this->smsService = $smsService;
    }

    /**
     * @inheritDoc
     */
    public function send($data)
    {
        echo 'this Sms notification is sent.';
    }
}
