<?php

declare(strict_types=1);

namespace Skeleton\Student\Domain\Service;


interface StudentServiceInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function execute(array $data);

}
