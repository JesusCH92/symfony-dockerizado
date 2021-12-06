<?php

declare(strict_types=1);

namespace App\User\Domain\Repository;

use App\Entity\User;

interface UserRepository
{
    public function findUserByEmail(string $email): ?User;

    public function save(User $user): void;
}