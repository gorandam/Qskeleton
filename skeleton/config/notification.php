<?php

/**
 *  This is notification observers factory hash map
 */
return [
    'email' => \Skeleton\Core\Notification\Factory\EmailNotificationFactory::class,
    'sms' => \Skeleton\Core\Notification\Factory\SmsNotificationFactory::class,
    'push' => \Skeleton\Core\Notification\Factory\PushNotificationFactory::class,
];
