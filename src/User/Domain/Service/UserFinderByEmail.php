<?php

declare(strict_types=1);

namespace App\User\Domain\Service;

use App\Entity\User;
use App\User\Domain\Repository\UserRepository;

final class UserFinderByEmail
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $email): ?User
    {
        return $this->repository->findUserByEmail($email);
    }
}