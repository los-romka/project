<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/{userId}/list")
     */
    public function list(int $userId)
    {
        return new JsonResponse(
            [
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
            ]
        );
    }
}