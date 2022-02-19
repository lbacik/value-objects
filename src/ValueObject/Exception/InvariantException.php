<?php

declare(strict_types=1);

namespace LBacik\ValueObject\Exception;

use RuntimeException;

class InvariantException extends RuntimeException
{
    public static function violation(string $message): static
    {
        return new static("Invariant's violation! {$message}");
    }
}
