<?php

declare(strict_types=1);

namespace RoyRakesh\SkeletonPhp\Contracts;

interface GreetingContract
{
    public function greet(string $name): string;
}
