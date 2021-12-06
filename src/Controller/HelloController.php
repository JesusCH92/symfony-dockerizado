<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/api/hello", name="api_hello")
     */
    public function index(): JsonResponse
    {
        $user = $this->getUser();

        return new JsonResponse(
            [
                'hello_there' => 'General Kenobi!',
                'user_email' => $user->getEmail(),
            ]
        );
    }
}
