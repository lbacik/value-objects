<?php

declare(strict_types=1);

namespace LBacik\ValueObject;

use LBacik\ValueObject;

trait Comparison
{
    protected function compare(mixed $a, mixed $b): bool
    {
        if ($a instanceof ValueObject && $b instanceof ValueObject) {
            $result = $a->isEqual($b);
        } else {
            $this->ifArrayThenSortArrayKeys($a);
            $this->ifArrayThenSortArrayKeys($b);

            $result = $a === $b;
        }

        return $result;
    }

    private function ifArrayThenSortArrayKeys(mixed &$value): void
    {
        if (is_array($value)) {
            ksort($value);
        }
    }
}
