<?php

declare(strict_types=1);

namespace App\User\ApplicationService;

use App\Entity\User;
use App\User\ApplicationService\DTO\UserRegisterRequest;
use App\User\Domain\Exception\UserHasAlreadyExisting;
use App\User\Domain\Repository\UserRepository;
use App\User\Domain\Service\UserFinderByEmail;

final class UserRegister
{
    private UserRepository $repository;
    private UserFinderByEmail $userFinder;
    private PasswordEncoder $passwordEncoder;

    public function __construct(UserRepository $repository, UserFinderByEmail $userFinder, PasswordEncoder $passwordEncoder)
    {
        $this->repository = $repository;
        $this->userFinder = $userFinder;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function __invoke(UserRegisterRequest $request): void
    {
        $user = ($this->userFinder)($request->email());

        if (null !== $user) {
            throw new UserHasAlreadyExisting($request->email());
        }

        $this->repository->save(
            new User(
                $request->email(),
                $request->roles(),
                ($this->passwordEncoder)($request->plainPassword())
            )
        );
    }
}