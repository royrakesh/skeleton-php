<?php

declare(strict_types=1);

namespace RoyRakesh\SkeletonPhp\Services;

use RoyRakesh\SkeletonPhp\Contracts\GreetingContract;

class GreetingService implements GreetingContract
{
    public function greet(string $name): string
    {
        return "Hello, $name!";
    }
}
