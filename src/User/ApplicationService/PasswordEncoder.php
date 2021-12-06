<?php

declare(strict_types=1);

namespace App\User\ApplicationService;

use App\User\Domain\Repository\PasswordEncoderRepository;

final class PasswordEncoder
{
    private PasswordEncoderRepository $encoder;

    public function __construct(PasswordEncoderRepository $encoder)
    {
        $this->encoder = $encoder;
    }

    public function __invoke(string $plainPassword): string
    {
        return $this->encoder->encode($plainPassword);
    }
}