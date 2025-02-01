# Skeleton PHP

![PHP Skeleton](https://img.shields.io/badge/PHP-Skeleton-blue.svg)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/royrakesh/skeleton-php/php.yml?branch=main)


A skeleton for modern PHP development, providing a clean structure and essential tooling.



## 🚀 Features
- PSR-4 autoloading
- Pest for testing
- Laravel Pint for code formatting
- PHPStan for static analysis
- Rector for code refactoring

## 🛠 Usage

### Run Tests
```sh
composer test
```

### Lint Code
```sh
composer lint
```

### Static Analysis
```sh
composer test:types
```

### Format Code
```sh
composer test:lint
```

## 🏗 Folder Structure
```
src/                # Main source code
tests/              # Unit and feature tests
```

## ✨ Example Implementation

### Greeting Contract
```php
declare(strict_types=1);

namespace RoyRakesh\SkeletonPhp\Contracts;

interface GreetingContract
{
    public function greet(string $name): string;
}
```

### Greeting Service
```php
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
```

### Pest Test for GreetingService
```php
<?php

declare(strict_types=1);

use RoyRakesh\SkeletonPhp\Services\GreetingService;

it('returns a greeting message', function () {
    $service = new GreetingService();

    expect($service->greet('Rakesh'))->toBe('Hello, Rakesh!');
});
```

## 🔗 Credits
This package utilizes the following open-source tools:
- [PestPHP](https://pestphp.com/) - A modern PHP testing framework.
- [Laravel Pint](https://github.com/laravel/pint) - An opinionated PHP code formatter.
- [PHPStan](https://phpstan.org/) - Static analysis tool for PHP.
- [Rector](https://github.com/rectorphp/rector) - Automated code refactoring tool.

## 📝 License
This project is licensed under the MIT License.

## 👤 Author
**Rakesh Roy**  
[Website](https://royrakesh.dev) | [Email](mailto:royrakesh.cob@gmail.com)

