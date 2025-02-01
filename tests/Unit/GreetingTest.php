<?php

declare(strict_types=1);

use RoyRakesh\SkeletonPhp\Greeting;

it('greets a user with a name', function () {
    $greeting = new Greeting();

    $result = $greeting->greet('Rakesh');

    expect($result)->toBe('Hello, Rakesh!');
});

it('greets a user with an empty name', function () {
    $greeting = new Greeting();

    $result = $greeting->greet('');

    expect($result)->toBe('Hello, !');
});
