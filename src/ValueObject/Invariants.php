<?php

declare(strict_types=1);

namespace LBacik\ValueObject;

use ReflectionObject;

trait Invariants
{
    protected function checkInvariants(): void
    {
        $reflection = new ReflectionObject($this);
        foreach ($reflection->getMethods() as $method) {
            $attributes = $method->getAttributes(Invariant::class);
            if (count($attributes) > 0) {
                $methodName = $method->getName();
                $this->$methodName();
            }
        }
    }
}
