<?php

declare(strict_types=1);

namespace Skeleton\Student\Infrastructure\Mapper;


use PDO;

class StudentDbAdapter implements StudentMapperInterface
{
    /**
     * @var PDO
     */
    private $driver;


    private $tableName = 'student';


    /**
     * UserDbAdapter constructor.
     * @param PDO $driver
     */
    public function __construct(PDO $driver)
    {
        $this->driver = $driver;
    }


    public function fetchSingle(string $studentId)
    {
        $sql = "SELECT * FROM `{$this->tableName}` WHERE `studentId` = :studentId";
        $stmt = $this->driver->prepare($sql);
        $stmt->execute([':studentId' => (int) $studentId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchGrades(string $studentId)
    {
        $sql = "SELECT `grade` FROM `grade` WHERE `studentId` = :studentId";
        $stmt = $this->driver->prepare($sql);
        $stmt->execute([':studentId' => (int) $studentId]);

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


}
