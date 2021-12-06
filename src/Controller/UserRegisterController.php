<?php

namespace App\Controller;

use App\User\ApplicationService\DTO\UserRegisterRequest;
use App\User\ApplicationService\UserRegister;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserRegisterController extends AbstractController
{
    private UserRegister $userRegister;

    public function __construct(UserRegister $userRegister)
    {
        $this->userRegister = $userRegister;
    }

    /**
     * @Route("/api/user/register", name="app_api_user_register", methods={"POST"})
     */
    public function index(Request $request): JsonResponse
    {
        $bodyContentRequest = json_decode($request->getContent(), true);

        $userLoggedEmail = $this->getUser()->getEmail();

        $email    = (string)$bodyContentRequest['email'];
        $password = (string)$bodyContentRequest['password'];

        ($this->userRegister)(
            new UserRegisterRequest(
                $email,
                $password,
                []
            )
        );

        return new JsonResponse(
            [
                'data' => "El usuario con email, $userLoggedEmail, ha registrado a: $email"
            ]
        );
    }
}
