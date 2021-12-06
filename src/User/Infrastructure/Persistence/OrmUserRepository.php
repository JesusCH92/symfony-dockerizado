<?php

declare(strict_types=1);

namespace App\User\Infrastructure\Persistence;

use App\Entity\User;
use App\Common\Infrastructure\Framework\Doctrine;
use App\User\Domain\Repository\UserRepository;

final class OrmUserRepository extends Doctrine implements UserRepository
{
    public function findUserByEmail(string $email): ?User
    {
        return $this->repository(User::class)->findOneBy(['email' => $email]);
    }

    public function save(User $user): void
    {
        $this->entityManager()->persist($user);
        $this->entityManager()->flush();
    }
}