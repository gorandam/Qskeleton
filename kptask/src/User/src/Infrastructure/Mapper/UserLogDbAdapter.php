<?php
declare(strict_types=1);

namespace Kptask\User\Infrastructure\Mapper;

use Kptask\User\Infrastructure\Mapper\UserMapperInterface;
use Kptask\User\Domain\Entity\User;
use Zend\Stdlib\ArrayObject;


/**
 * Class UserLogDbAdapter
 * @package Kptask\User\Infrastructure\Mapper
 */
class UserLogDbAdapter implements UserMapperInterface
{

    /**
     * @inheritDoc
     */
    public function fetchAll($params = array(), $limit)
    {
        // TODO: Implement fetchAll() method.
    }

    /**
     * @inheritDoc
     */
    public function fetchSingle($articleUuid)
    {
        // TODO: Implement fetchSingle() method.
    }

    /**
     * @inheritDoc
     */
    public function create(User $article)
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function update(User $article)
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(User $article)
    {
        // TODO: Implement delete() method.
    }
}
