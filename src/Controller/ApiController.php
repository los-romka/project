<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function list()
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
