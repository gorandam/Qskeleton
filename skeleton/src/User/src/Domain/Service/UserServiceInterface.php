<?php
declare(strict_types=1);

namespace Skeleton\User\Domain\Service;


/**
 * Interface UserServiceInterface
 * @package Skeleton\User\Domain\Service
 */
interface UserServiceInterface
{

    /**
     * @param $data
     * @return mixed
     */
    public function create($data);


    /**
     *
     * @return mixed
     */
    public function getAll();


    /**
     * @param $userId
     * @return mixed
     */
    public function getById($userId);


    /**
     * @param $data
     * @return mixed
     */
    public function update($data);


    /**
     * @param $data
     * @return mixed
     */
    public function delete($data);
}
