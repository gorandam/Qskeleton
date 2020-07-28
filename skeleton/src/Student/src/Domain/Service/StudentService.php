<?php

declare(strict_types=1);

namespace Skeleton\Student\Domain\Service;

use Skeleton\Student\Domain\Entity\Student;
use Skeleton\Student\Domain\Repository\StudentRepositoryInterface;
use Skeleton\Student\Domain\Service\StudentServiceInterface;

class StudentService implements StudentServiceInterface
{
    /**
     * @var StudentRepositoryInterface
     */
    private $studentRepo;

    /**
     * StudentService constructor.
     * @param StudentRepositoryInterface $studentRepo
     */
    public function __construct(StudentRepositoryInterface $studentRepo)
    {
        $this->studentRepo = $studentRepo;
    }

    public function execute(array $data)
    {
        $studentGrades = $this->studentRepo->fetchGrades($data['studentId']);

        $studentModel = new Student();

        $studentModel->exchangeArray($this->studentRepo->fetchById($data['studentId']));

        foreach ($studentGrades as $studentGrade) {
            $studentModel->setGrades($studentGrade->grade);
        }

        $average = $this->countAverage($studentModel->getGrades());

        $finalResult = $this->countFinalResult($studentModel, $average);

        $studentDto = $studentModel->getDtoCopy();

        $studentDto->average = $average;
        $studentDto->finalResult = $finalResult;

        return $studentDto;
    }

    private function countAverage($grades)
    {
        return array_sum($grades) / count($grades);
    }

    private function countFinalResult(Student $studentModel, $average)
    {
        if (count($studentModel->getGrades()) > 2 && $studentModel->getBoard() === 'CSMD') {
            $maxValue = max($studentModel->getGrades());

            return $maxValue > 8 ? 'pass' : 'fail';
        }

        return $average >= 7 ? 'pass' : 'fail';
    }
}
