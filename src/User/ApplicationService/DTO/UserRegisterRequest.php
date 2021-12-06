<?php

declare(strict_types=1);

namespace App\User\ApplicationService\DTO;

final class UserRegisterRequest
{
    private string $email;
    private string $plainPassword;
    private array $roles;

    public function __construct(string $email, string $plainPassword, array $roles)
    {
        $this->email = $email;
        $this->plainPassword = $plainPassword;
        $this->roles = $roles;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function plainPassword(): string
    {
        return $this->plainPassword;
    }

    public function roles(): array
    {
        return $this->roles;
    }
}