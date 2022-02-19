<?php

declare(strict_types=1);

namespace LBacik\ValueObject\Exception;

use RuntimeException;

class ValueObjectException extends RuntimeException
{
    public const FIELD_NOT_FOUND = 1;

    public static function fieldNotFound(string $fieldName): self
    {
        return new static("Field not found: {$fieldName}", self::FIELD_NOT_FOUND);
    }
}
