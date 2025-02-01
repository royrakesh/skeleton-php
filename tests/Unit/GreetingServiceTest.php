<?php

declare(strict_types=1);

use RoyRakesh\SkeletonPhp\Services\GreetingService;

it('returns a greeting message', function () {
    $service = new GreetingService();

    expect($service->greet('Rakesh'))->toBe('Hello, Rakesh!');
});
