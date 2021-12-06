<?php

declare(strict_types=1);

namespace App\User\Infrastructure;

use App\User\Domain\Repository\PasswordEncoderRepository;

final class Md5PasswordEncoderRepository implements PasswordEncoderRepository
{
    public function encode(string $plainPassword): string
    {
        return md5($plainPassword);
    }
}