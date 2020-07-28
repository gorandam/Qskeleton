<?php

declare(strict_types=1);

namespace Skeleton\Student\Api;

use Psr\Http\Message\ResponseInterface as Response;
use GuzzleHttp\Psr7\ServerRequest as Request;
use Skeleton\Student\Domain\Service\StudentServiceInterface;

class StudentController
{
    /**
     * @var StudentServiceInterface
     */
    private $studentService;

    /**
     * StudentController constructor.
     * @param StudentServiceInterface $studentService
     */
    public function __construct(StudentServiceInterface $studentService)
    {
        $this->studentService = $studentService;
    }

    public function __invoke(Request $request, Response $response, callable $next = null)
    {

        $data = $request->getAttributes();

        $studentData = $this->studentService->execute($data);

        if ($studentData->board === 'CSMB') {
            $studentData =  wddx_serialize_value($studentData);
            var_dump($studentData);
            //TODO: this need to be finished to convert it to XML the accent was on the architecture

//            $response->getBody()->write(\GuzzleHttp\json_encode([$studentData]));
//            $response->getBody()->rewind();
//
//            return $response;
        }

        $response->getBody()->write(\GuzzleHttp\json_encode($studentData));
        $response->getBody()->rewind();

        return $response;
    }
}
