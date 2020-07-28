<?php
declare(strict_types=1);

namespace Skeleton\User\Infrastructure\Mapper;

use Skeleton\User\Infrastructure\Mapper\UserMapperInterface;
use Skeleton\User\Domain\Entity\User;
use Zend\Stdlib\ArrayObject;


/**
 * Class UserLogDbAdapter
 * @package Skeleton\User\Infrastructure\Mapper
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
