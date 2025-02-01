<?php

declare(strict_types=1);

namespace RoyRakesh\SkeletonPhp;

use RoyRakesh\SkeletonPhp\Services\GreetingService;

final class Greeting
{
    private GreetingService $greetingService;

    public function __construct()
    {
        $this->greetingService = new GreetingService();
    }

    public function greet(string $name): string
    {
        return $this->greetingService->greet($name);
    }
}
