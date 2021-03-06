<?php

declare(strict_types=1);

namespace Skeleton\Core\Notification;

use Zend\Mail\Message;
use Zend\Mail\Transport\Sendmail;

/**
 * Class EmailNotification
 * @package Skeleton\Core\Notification
 */
class EmailNotification implements NotificationInterface
{
    private $mailService;
    private $transportService;

    /**
     * EmailNotification constructor.
     * @param Message $mailService
     * @param Sendmail $transportService
     */
    public function __construct(Message $mailService = null, Sendmail $transportService = null)
    {
        $this->mailService = $mailService;
        $this->transportService = $transportService;
    }

    /**
     * @inheritDoc
     */
    public function send($data)
    {
        $mailService = $this->mailService;
        if (array_key_exists('email', $data)) {
            $mailService->setBody('Welcome to Skeleton, keep coding...');
            $mailService->setFrom('Skeleton@mail.com');
            $mailService->addTo($data['email']);
            $mailService->setSubject('Welcome to Skeleton!');

            try {
                $this->transportService->send($mailService);
            } catch (\Exception $e) {
                echo $e;
            }
        }
    }
}
