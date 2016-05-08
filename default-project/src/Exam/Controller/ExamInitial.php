<?php

namespace Ja\DefaultProject\Bundle\Exam\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @author Jan Arnold <jan.arnold@movingimage.com>
 *
 * @codeCoverageIgnore
 */
class ExamInitial extends Controller
{

    public function __construct()
    {
    }

    /**
     * @param string $name
     *
     * @return JsonResponse
     */
    public function __invoke($name)
    {

        return new JsonResponse(['name' => $name]);
    }
}
