<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    private string $appEnv;
    private bool $appDebug;
    private string $databaseUrl;

    public function __construct(string $appEnv, bool $appDebug, string $databaseUrl)
    {
        $this->appEnv = $appEnv;
        $this->appDebug = $appDebug;
        $this->databaseUrl = $databaseUrl;
    }

    /**
     * @Route("/")
     */
    public function list()
    {
        $data = [
            'env' => $this->appEnv,
            'debug' => $this->appDebug,
            'list' => [
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
                random_int(0, 100),
            ],
        ];

        if ($this->appDebug) {
            $data['database_url'] = $this->databaseUrl;
        }

        return new JsonResponse($data);
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        return new JsonResponse('Hello world');
    }
}
