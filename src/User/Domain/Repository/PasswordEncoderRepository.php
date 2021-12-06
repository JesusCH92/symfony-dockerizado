<?php

declare(strict_types=1);

namespace App\User\Domain\Repository;

interface PasswordEncoderRepository
{
    public function encode(string $plainPassword): string;
}