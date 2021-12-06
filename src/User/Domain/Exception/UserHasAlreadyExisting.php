<?php

declare(strict_types=1);

namespace App\User\Domain\Exception;

use Exception;
use Throwable;

final class UserHasAlreadyExisting extends Exception
{
    public function __construct(string $value, $code = 0, Throwable $previous = null)
    {
        parent::__construct(sprintf('"%s" este email ya esta dado de alta', $value), $code, $previous);
    }
}