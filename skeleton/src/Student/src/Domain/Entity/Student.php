<?php

declare(strict_types=1);

namespace Skeleton\Student\Domain\Entity;

use stdClass;

class Student
{
    private $studentId;

    private $name;

    private $board;

    private $grades = [];

    /**
     * @inheritdoc
     *
     * @param array $array
     */
    public function exchangeArray(array $array)
    {
        foreach ($array as $key => $value) {
            $setter = 'set' . ucfirst($key);

            if (method_exists($this, $setter)) {
                $this->{$setter}($value);
            }
        }
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getArrayCopy()
    {
        $data = [];

        foreach (get_object_vars($this) as $key => $value) {
            $data[$key] = $value;
        }

        return $data;
    }

       /**
     * Transform entity to DTO.
     *
     * @return stdClass
     */
    public function getDtoCopy(): stdClass
    {
        $dto = new stdClass();

        foreach (get_object_vars($this) as $key => $value) {
            $dto->{$key} = $value;
        }

        return $dto;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $studentId
     */
    private function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    private function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBoard()
    {
        return $this->board;
    }


    public function setGrades($grade)
    {
        $this->grades[] = $grade;
    }

    /**
     * @return mixed
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * @param $board
     */
    public function setBoard($board)
    {
        $this->board = $board;
    }
}
